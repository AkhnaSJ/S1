clr1 = input("Enter colourlist1 seperated with commas: ")
clr2 = input("Enter colourlist2 seperated with commas: ")
clr_list1 = clr1.split(',')
clr_list2 = clr2.split(',')

print("Colours in list 1 but not in list 2 are: ",[value for value in clr_list1 if value not in clr_list2])