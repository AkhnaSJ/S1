from graphics import circle
from graphics.rectangle import *
from graphics.graphics3d.cuboid import area as cuboid_area, perimeter as cuboid_perimeter
from graphics.graphics3d.sphere import area as sphere_area, perimeter as sphere_perimeter

# Circle
a = int(input("Enter the radius of circle: "))

circle.area(a)
circle.perimeter(a)
print("\n")


# Rectangle
l = int(input("Enter the length of rectangle: "))
b = int(input("Enter the breadth of rectangle: "))

print("Area of rectangle: ",area(l,b))
print("Perimeter of rectangle: ",perimeter(l,b))
print("\n")


# Cuboid
l = int(input("Enter the length of cuboid: "))
b = int(input("Enter the breadth of cuboid: "))
h = int(input("Enter the height of cuboid: "))

cuboid_area(l,b,h)
cuboid_perimeter(l,b,h)
print("\n")


# Sphere
r = int(input("Enter the radius of sphere: "))

sphere_area(r)
sphere_perimeter(r)
print("\n")




