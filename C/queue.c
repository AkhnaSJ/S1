# include <stdio.h>
# include <stdlib.h>
# define size 5

int queue[size];
int front = -1, rear = -1;

void display();
void enqueue();
void dequeue();

void main() {
    while(1) {
        int input;
        printf("\n1 to display \n2 to enqueue \n3 to dequeue \n4 to exit \nEnter your choice: ");
        scanf("%d", &input);
        switch(input) {
            case 1:
                display();
                break;
            case 2:
                enqueue();
                break;
            case 3:
                dequeue();
                break;
            case 4:
                exit(0);
            default:
                break;
        }
    }
}

// Whether Queue is Full
int isFull() {
    if (rear == size - 1) {
        printf("Queue is Full!\n");
        return 1;
    }
    return 0;
}

// Whether Queue is Empty
int isEmpty() {
    if(front == -1 || front > rear) {
        printf("Queue is Empty!\n");
        return 1;
    }
    return 0;
}

// Displays the queue
void display() {
    if(isEmpty())
        return;

    printf("Queue: ");
    for (int i = front; i <= rear; i++)
        printf("%d ", queue[i]);
    printf("\n");
}


// Add an element
void enqueue() {
    if (isFull())
        return;
    if(front == -1)
        front = 0;

    rear ++;
    int element;
    printf("Element: ");
    scanf("%d", &element);
    queue[rear] = element;
    display();
}

//Remove an element
void dequeue() {
    if (isEmpty())
        return;

    int element = queue[front];
    front ++;
    display();

    if (front > rear) {
        front = -1, rear = -1;
    }
}