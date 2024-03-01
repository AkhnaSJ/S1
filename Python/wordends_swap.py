str = (input("Enter 2 words: ")).split()
new_str = str[1][0] + str[0][1:] + " " + str[0][0] + str[1][1:]

print("New string: ",new_str)
