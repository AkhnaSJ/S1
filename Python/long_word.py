word = input("Enter a sentence: ")
word_list = word.split()
count = 0
for item in word_list:
    if len(item) > count:
        count = len(item)
        long = item

print(f"Longest word: {long}\nLength: {count}")

