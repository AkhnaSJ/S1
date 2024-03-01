x = int(input("Number 1: "))
y = int(input("Number 2: "))
input = (input("Enter 1 for addition, 2 for subtraction, 3 for multiplication, 4 for division: "))

if input == 1:
    result = x + y
    print("Sum : ",result)

elif input == 2:
    result = x - y
    print("Difference : ",result)

elif input == 3:
    result = x * y
    print("Product : ",result)

elif input == 4:
    result = x // y
    print("Quotient : ",result)

else: 
    print("Invalid Choice: ")


# Another method
'''
a= input("Enter expression: ")

if ('+' in a):
 i=a.index('+')
 print ("Sum= ",int(a[0:i])+int(a[i+1:]))

if ('-' in a):
 i=a.index('-')
 print ("Difference= ",int(a[0:i])-int(a[i+1:]))

if ('*' in a):
 i=a.index('*')
 print ("Product= ",int(a[0:i])*int(a[i+1:]))
 
if ('/' in a):
 i=a.index('/')
 print ("Quotient.Remainder= ",float(a[0:i])/float(a[i+1:]))
'''

