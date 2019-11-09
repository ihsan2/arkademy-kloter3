function username_valid(username) {
 
    var hurufKecil = /[a-z]/g;
  
	if(username.length >= 5 && username.match(hurufKecil).length == username.length) {
    	return true;
    }
    return false;
}

function password_valid(password) {
 
  var hurufBesar = /[A-Z]/g;
  var angka = /[0-9]/g;
  var special = /[@&]/g;
  var pertama = password.substr(0, 2);
  var kedua = password.substr(2, 1);
  var ketiga = password.substr(3, 4);

  if(password.length == 7 && 
     pertama.match(angka).length == pertama.length && 
     kedua.match(special).length == kedua.length &&
     ketiga.match(hurufBesar).length == ketiga.length) {
     return true;
  }
  return false;
}

console.log(password_valid("29@PASS") ? 'benar' : 'salah'); 
console.log(password_valid("234&Agan") ? 'benar' : 'salah');
console.log(username_valid("arkademy") ? 'benar' : 'salah'); 
console.log(username_valid("Arkademy") ? 'benar' : 'salah');