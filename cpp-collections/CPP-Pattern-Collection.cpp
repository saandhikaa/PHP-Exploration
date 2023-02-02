#include <iostream>
#include <conio.h>
#include <math.h>

using namespace std;

void menu(int x),
     case_1(),
     case_2();

int main(){
    cout<<"\n M E N U"<<endl<<endl;
    cout<<" 1. Pola Anak Panah"<<endl;
    cout<<" 2. Pola Angka Keyboard"<<endl;
    cout<<endl;

    int selected = 0;
    while (selected <= 0 || selected > 2){
        cout<<" Pilihan ? ";
        cin>>selected;
    }

    system("CLS");
    menu(selected);
}

void case_1 (){
    int N;
    cout<<"Panjang : ";
    cin>>N;
    cout<<endl;

    int X = 1;
    for (int s = 0; s > -1; s+=X){
        if (s == N) {
            X = -1;
        } else {
            for(int a = 0; a < s; a++) {
                cout<<" ";
            }
            cout<<">>>>>"<<endl;
        }
    }
    cout<<endl;
}

void case_2(){
    long long N;
    cout<<"karakter ke-";
    cin>>N;
    cout<<endl;

    int method = 0;
    while (method <= 0 || method > 2){
        cout<<"metode (1/2) ? ";
        cin>>method;
    }
    cout<<endl;

    if (method == 1){
        long long total = 0, p = 0, num;
        for (int s = 0;; s++){
            total += 9*pow(10,s)*(s+1);
            if (N <= total){
                // cout<<"sizes : "<<s+1<<endl;
                // cout<<"overs : "<<p<<endl<<endl;
                num = (N-p-1) / (s+1) + pow(10,s);
                cout<<" angka : "<<num<<endl;
                
                int index = (N-p) % (s+1);
                index += index == 0 ? s : -1;
                cout<<" index : ";
                for(int space = 0; space < index; space++, cout<<" ");
                cout<<"^"<<endl<<endl;
                
                while (s > index){
                    num /= 10;
                    s--;
                }
                cout<<" hasil : "<<num%10;
                break;
            }
            p = total;
        }
    }

    if (method == 2){
        for (int s = 1, limit = 0;limit < N;s++){
            string x = to_string(s);
            for (int a = 0; a < x.length(); a++){
                cout<<" "<<x[a];
                limit++;
                if (limit >= N){
                    cout<<"\n\n Hasil : "<<x[a];
                    break;
                }
            }
            cout<<endl;
        }
    }

    cout<<endl<<endl;
}

void menu(int x){
    switch (x){
        case 1:
            cout<<"1. Pola anak panah\n\n";
            case_1();
        break;
        
        case 2:
            cout<<"2. Pola angka keyboard\n\n";
            cout<<"Dito suka mengetik angka dari 1 sampai 1000 di komputer\n";
            cout<<"Tapi keyboard Dito rusak, tombol spasinya tidak bisa ditekan\n";
            cout<<"Akibatnya angka yang diketik Dito menjadi seperti ini:\n\n";
            cout<<"123456789101112131415161718192021222324...\n\n";
            cout<<"Angka berapa yang diketik Dito di karakter ke-N ?\n\n";
            case_2();
        break;

        default:
        break;
    }
    system("PAUSE");
}