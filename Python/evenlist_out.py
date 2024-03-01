l1 = input("Enter a list of numbers: ").split()
l2 = map(int,l1)

new_list = [x for x in l2 if x % 2 != 0]
print("New List: ",new_list)

'''
numbers = []
for i in range(int(input("Enter the size of the list: "))):
    numbers.append(int(input(f"numbers[{i}]: ")))

newlist = [x for x in numbers if x % 2 != 0]
print(newlist)
'''