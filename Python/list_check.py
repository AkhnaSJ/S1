int1 = int(input("Enter 1st list of integers seperated by spaces: "))
int2 = int(input("Enter 2nd list of integers seperated by spaces: "))
list1 = int1.split()
list2 = int2.split()

#list1 = [3,5,1]
#list2 = [3,1,2]


# Lists are of same length
if len(list1) == len(list2):
    print("Lists are of same length")
else:
    print("Lists are not of same length")

# Sum of lists are equal
if sum(list1) == sum(list2):
    print("Sum of lists are equal")
else:
    print("Sum of lists are not equal")

# Whether both the lists have same value
common = set(list1) & set(list2)
if list1 == list2:
    print("Lists are same")
elif common == 0:
        print("No common elements")
else:
        print("Common elements: ",common)
