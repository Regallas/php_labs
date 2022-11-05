void anagram() {
  var str1 = 'hello';
  var str2 = 'olleh';
  int m = 0;

  for (int i = 0; i < str1.length; i++) {
    for (int j = str2.length - 1; j > 0; j--) {
      if (str1[i] == str2[j]) {
        m = 0;
        i++;
        continue;
      }
      if (str1[i] != str2[j]) {
        m = 1;
        print("false");
        break;
      }
    }
    if (m == 1) {
      break;
    }
    if (m == 0) {
      print("true");
      break;
    }
  }
}

void main() {
  anagram();
}
