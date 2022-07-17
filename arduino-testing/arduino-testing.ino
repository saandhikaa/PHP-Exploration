//optional for external editor 
#include <arduino.h>
  extern HardwareSerial Serial;

#include <GyverFIFO.h>
#include <DS3231.h>
  DS3231 rtc(SDA, SCL);

#include <EEPROM.h>

GyverFIFO <int, 16> fifo;

int status = 0;

void setup() {
  pinMode(LED_BUILTIN,OUTPUT);

  Serial.begin(9600);
  Serial.println("START");
  
  //EEPROM.write(2,211);
  eeprom_read();

  rtc.begin();

  for (int s = 0; s < 10; s++){
    fifo.write(s);
  }
  
  while (fifo.available()){
    Serial.print(String(fifo.read()) + " ");
  }
  Serial.println("\n");
}

void loop() {
  Serial.print(String(rtc.getDOWStr()) + ", " + String(rtc.getDateStr()) + " -- " + String(rtc.getTimeStr()) + " | LED : ");

  Serial.println(status ? "ON" : "OFF");
  digitalWrite(LED_BUILTIN, status);
  status = !status;
  
  delay(1000);
}

/////////////////////////////////////////////////////////////////////////////////////////

void eeprom_clear(){
  for (int s = 0; s <= EEPROM.length(); s++){
    EEPROM.write(s,0);
  }
}

void eeprom_read(){
  Serial.println("EEPROM Length: " + String(EEPROM.length()));
  
  int value;
  boolean nodata = true;

  for (int s = 0; s <= EEPROM.length(); s++){
    value = EEPROM.read(s);
    if (value > 0){
      Serial.println("Data eeprom " + String(s) + "\t: " + String(value));
      nodata = false;
    }
  }

  if (nodata){
    Serial.println("No data - EEPROM");
  }
}