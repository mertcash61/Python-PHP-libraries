#include <iostream>
#include <string>

using namespace std;

bool isValidUser(const string& username, const string& password) {
    // Kullanıcı doğrulama mantığı
    return username == "admin" && password == "password"; // Örnek
}

int main() {
    string username, password;

    cout << "Kullanıcı Adı: ";
    cin >> username;
    cout << "Şifre: ";
    cin >> password;

    if (isValidUser(username, password)) {
        cout << "Giriş başarılı!" << endl;
    } else {
        cout << "Kullanıcı adı veya şifre hatalı." << endl;
    }

    return 0;
}
