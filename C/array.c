# include <stdio.h>
# include <stdlib.h>
# define MAX 5

int arr[MAX];
int size;
int element;

void create();
void display();
void search();
void sort();
void merge();
void insert();
void delete();
void reverse();


void main() {
    create();
    while(1) {
        int input;
        printf("\n1 to display\n2 to search\n3 to sort\n4 to merge\n5 to insert\n6 to delete \n7 to reverse \n8 to exit\nEnter your choice: ");
        scanf("%d",&input);
        switch(input) {
            case 1: 
                display();
                break;
            case 2:
                search();
                break;
            case 3:
                sort();
                break;
            case 4:
                merge();
                break;
            case 5:
                insert();
                break;
            case 6:
                delete();
                break;
            case 7:
                reverse(0, size-1);
                break;
            case 8:
                exit(0);
            default:
                break;
        }
    }

}

// Create array
void create() 
{
    printf("Size of array: ");
    scanf("%d", &size);
    
    printf("Elements of array: \n");
    for (int i = 0; i < size; i++) 
        scanf("%d", &arr[i]);  
}

// Display array
void display() 
{   
    if (size == 0) {
        printf("Array is Empty!");
        return;
    }
    printf("Array: [ ");
    for (int i = 0; i < size; i++) 
        printf("%d ", arr[i]); 
    printf("]\n");
}

// Search an element
void search() 
{
    printf("Element to be searched: ");
    scanf("%d",&element);
    for(int i = 0; i < size; i++) 
    {
        if(arr[i] == element)
        {
            printf("%d is found at position %d", arr[i], i + 1);
            return;
        }
    }
    printf("Element not found!");
}

// Sort an array(Bubble Sort)
void sort() 
{
    for(int i = 0; i < size; i++)
    {
        for(int j = 0; j < size-1; j++)
        {
            if(arr[j] > arr[j + 1]) {
                int temp = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = temp;
            }
        }
    }
    display();
}

// Merge an array
void merge() {
    int n, arr2[MAX];
    printf("Enter the size of array to be merged: ");
    scanf("%d",&n);
    printf("Enter the array elements: ");
    for(int i=0; i<n; i++){
        scanf("%d",&arr2[i]);
    }
    
    for(int i=0; i<n; i++)
        arr[i]=arr[i];
        
    for(int i=0; i<n; i++)
        arr[size+i]=arr2[i];

    printf("Merged ");
}

// Whether array is full
int isFull()
{
    if (size == MAX)
    {
        printf("Array is full!\n");
        return 1;
    }
    return 0;
}

// Whether array is empty
int isEmpty()
{
    if (size == 0)
    {
        printf("Array is Empty!\n");
        return 1;
    }
    return 0;
}

// Insert an element
void insBeg(int element)
{
    for (int i = size; i > 0; i--)
        arr[i] = arr[i - 1];
    arr[0] = element;
    size++;
}

void insPos(int element)
{
    int pos;
    printf("Position: ");
    scanf("%d", &pos);
    if (pos < 1 || pos > size + 1){
        printf("Invalid Entry!\n");
        return;
    }
    for(int i = size; i >= pos-1; i--)
        arr[i] = arr[i-1];
    arr[pos-1] = element;
    size++;
}

void insEnd(int element)
{
    arr[size] = element;  
    size++;
}

void insert()
{   
    isFull();
    int choice;
    printf("Element: ");
    scanf("%d",&element);
    
    printf("\n1 at Beginning \n2 at a position \n3 at end \nEnter your choice: ");
    scanf("%d",&choice);
    
    switch(choice) 
    {
        case 1:
            insBeg(element);
            break;  
        case 2:
            insPos(element);
            break;
        case 3:
            insEnd(element);
            break;
        default:
            break;
    }
    display();
}

// Delete an element
void delBeg() 
{
    element = arr[0];
    for(int i = 0; i < size-1; i++)
        arr[i] = arr[i + 1];
    size--;
}

void delPos() 
{
    int pos;
    printf("Position: ");
    scanf("%d",&pos);
    if (pos < 1 || pos > size)
    {
        printf("Invalid Entry!\n");
        return;
    }
    element = arr[pos-1];
    for(int i = pos-1; i < size; i++)
        arr[i] = arr[i + 1];
    size--;
}

void delEnd() 
{
    element = arr[size-1];
    size--;
}

void delete() {
    isEmpty();
    int choice;
    printf("1 at Beginning \n2 at Position \n3 at End \nEnter your choice: ");
    scanf("%d",&choice);
    switch(choice)
    {
        case 1:
            delBeg();
            break;
        case 2:
            delPos();
            break;
        case 3:
            delEnd();
            break;
        default:
            break;
    }
    display();

}

// Reverse an array
void reverse(int first, int last) {

    // Till we reach middle of the array
    if(first >= last)
    {
        display();
        return;
    }

    // Swap first and last elements
    int temp = arr[first];
    arr[first] = arr[last];
    arr[last] = temp;
    reverse(first + 1, last - 1);
    
}