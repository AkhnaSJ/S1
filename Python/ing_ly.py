str = input("Enter a string: ")

if str[-3:] == 'ing':
    str += 'ly'

else:
    str += 'ing'

print("New String:",str)