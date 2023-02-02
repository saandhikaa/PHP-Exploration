#include <iostream>

using namespace std;
int N = 10;
float Modus(int value[]);

int main(){
    int p = 0;
    int n[10];
    for (int s = 0; s < N; s++){
        cout<<s+1<<".\t";
        cin>>n[s];
    }

    cout<<endl<<Modus(n);
    while(1);

/*
    while(1){
        cout<<endl<<"Pilihan Anda: ";
        cin>>p;
        int x; 

        switch(p){
            case 1:
                
            break;

            case 2:
                cout<<"Menampilkan bilangan prima hingga: ";
                cin>>n;
                cout<<"2, 3";
                bool prima;
                for (int s = 4; s < n; s++){
                    prima = true;
                    for (int a = 2; a < s-1; a++){
                        if (s%a == 0){
                            prima = false;
                            break;
                        }
                    }
                    if (prima){
                        cout<<", "<<s;
                    }
                }
                cout<<endl;
            break;

            case 3:
                int n[10];
                cout<<"Mengurutkan data"<<endl;
                for (int s = 0; s < 10; s++){
                    cout<<s+1<<".\t";
                    cin>>n[s];
                }

                int tmp;
                for (int s = 0; s < 10; s++){
                    for (int a = s+1; a < 10; a++){
                        if (n[a] <= n[s]){
                            tmp = n[a];
                            n[a] = n[s];
                            n[s] = tmp;
                        }
                    }
                    cout<<n[s]<<"  ";
                }
                cout<<endl;
            break;

            case 4:
                cout<<"Mendapatkan Modus"<<endl;
                for (int s = 0; s < 10; s++){
                    cout<<s+1<<".\t";
                    cin>>n[s];
                }

                for (int s = 0; s < 10; s++){
                    for (int a = s+1; a < 10; a++){
                        if (n[a] <= n[s]){
                            tmp = n[a];
                            n[a] = n[s];
                            n[s] = tmp;
                        }
                    }
                    cout<<n[s]<<"  ";
                }

                int t[10];
                for (int s = 0; s < 10; s++){
                    t[s] = 0;
                    for (int a = 0; a < 10; a++){
                        if (n[s] == n[a]){
                            t[s]++;
                        }
                    }
                }

                int k; k =1;
                for (int s = 0; s < 10; s++){
                    if (t[s] > k){
                        k = t[s];
                    }
                }

                x = 0;
                int m[10];
                for (int s = 0; s < 10; s++){
                    m[x] = x == 0 ? 0 : m[x-1] ;

                    if (t[s] == k){
                        if (n[s] != m[x]){
                            m[x] = n[s];
                            x++;
                        }
                    }
                }

                int z; z = 0;
                for (int s = 0; s < 10; s++){
                    if (t[s] == k){
                        z++;
                    }
                }
                if (z == 10){
                    x = 0;
                }
                if (x == 0){
                    cout<<"\nTidak ada modus"<<endl;
                }else{
                    cout<<"\nModus "<<x<<" = ";
                    for (int s = 0; s < x; s++){
                        cout<<m[s]<<" ";
                    }
                    cout<<endl;
                }
            break;

            default:
                cout<<"pilihan tidak ada"<<endl;
            break;
        }
    }
*/
}

float Modus(int value[]){
    double result = 0;

    // mengurutkan value
    for (int s = 0; s < N; s++){
        for (int a = s+1; a < N; a++){
            if (value[a] <= value[s]){
                int tmp = value[a];
                value[a] = value[s];
                value[s] = tmp;
            }
        }
    }

    // mengitung jumlah value yg sama
    int svalue[100];
    for (int s = 0; s < N; s++){
        svalue[s] = 0;
        for (int a = 0; a < N; a++){
            if (value[s] == value[a]){
                svalue[s]++;
            }
        }
    }

    // mendapatkan jumlah value terbanyak
    int hp = 1;     //highest point
    for (int s = 0; s < N; s++){
        if (svalue[s] > hp){
            hp = svalue[s];
        }
    }

    int m = 0;      //total same value
    int mvalue[100];
    for (int s = 0; s < N; s++){
        mvalue[m] = m == 0 ? 0 : mvalue[m - 1];
        if (svalue[s] == hp){
            if (value[s] != mvalue[m]){
                mvalue[m] = value[s];
                m++;
            }
        }
    }

    int z = 0;
    for (int s = 0; s < N; s++)
        if (svalue[s] == hp)
            z++;
    if (z == N) m = 0;
    
    if (m == 0){
        for (int s = 0; s < N; s++)
            result += value[s];
        result /= N;
    }else{
        for (int s = 0; s < m; s++)
            result += mvalue[s];
        result /= m;
    }

    cout<<"m : "<<m<<endl;
    cout<<"z: "<<z<<endl;
    cout<<"\nModus: ";
    return result;
}