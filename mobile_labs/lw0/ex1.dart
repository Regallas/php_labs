void fizzbuzz(int n) {
  for (int i = 1; i <= n; i++) {
    if (i % 3 == 0 && i % 5 != 0) {
      print("fizz");
    }
    if (i % 5 == 0 && i % 3 != 0) {
      print("buzz");
    }
    if (i % 3 == 0 && i % 5 == 0) {
      print("fizzbuzz");
    }
    if (i % 5 != 0 && i % 3 != 0) {
      print(i);
    }
  }
}

void main() {
  fizzbuzz(30);
}
