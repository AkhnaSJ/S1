# include <stdio.h>
# include <stdlib.h>
# define size 10

int stack[size];
int top = -1;

void display();
void push();
void pop();
void peek();
int count();

void main() {

    while(1){
        int input;
        printf("\n1 to display \n2 to push \n3 to pop \n4 to peek \n5 to count \n6 to exit \nEnter your choice: ");
        scanf("%d", &input);
        switch(input) {
            case 1:
                display();
                break;
            case 2:
                push();
                break;
            case 3:
                pop();
                break;
            case 4:
                peek();
                break;
            case 5:
                printf("Count: %d\n",count());
                break;
            case 6:
                exit(0);
            default:
                break;

        }
    }
}

// Whether Stack is Full
int isFull() {
    if(top == size - 1) {
        printf("Stack Overflow!\n");
        return 1;
    }
    return 0;
}

// Whether Stack is Empty
int isEmpty() {
    if(top == -1){
        printf("Stack Underflow!\n");
        return 1;
    }
    return 0;
}

// Display the stack
void display() {
    if (isEmpty())
        return;

    printf("Stack: ");
    for(int i = 0; i <= top; i++) 
        printf("%d ", stack[i]);
    printf("\n");

    printf("Top: %d", top);
}

// Push an element
void push() {
    if (isFull()) 
        return;

    top ++;
    int element;
    printf("Element: ");
    scanf("%d", &element);
    stack[top] = element;
    display();
}

// Pop an element
void pop() {
    if (isEmpty()) 
        return;

    top --;
    int element = stack[top];
    display();
    printf("\nPopped Element: %d\n", element);
}

// Displays the top element
void peek() {
    if (isEmpty())
        return;
    printf("Element: %d\n", stack[top]);
    printf("Top: %d\n", top);
}

// Count of Stack
int count() {
    return top + 1;
}