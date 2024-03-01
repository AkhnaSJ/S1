str = input("Enter the numbers seperated by spaces: ")
str_list = str.split()
int_list = [int(item) for item in str_list]

print("Sum: ",sum(int_list))

