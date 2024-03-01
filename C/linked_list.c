# include <stdio.h>
# include <stdlib.h>

struct node{
    int data;
    struct node *next;
};

int size = 0;
struct node *head = NULL;
struct node *newnode, *temp, *temp1, *delnode;

void display();
void insert();
void delete();

void main() {
    
    while(1) {
        int input;
        printf("\n1 to display \n2 to insert \n3 to delete \n4 to exit \nEnter your choice: ");
        scanf("%d", &input);
        switch(input) {
            case 1:
                display(head);
                break;
            case 2:
                insert();
                break;
            case 3:
                delete();
                break;
            case 4:
                exit(0);
            default:
                break;
        }
    }
}


//Display Linked List
void display(struct node *ptr)
{
	if (ptr == NULL) {
		printf("NULL\n");
		return;
	}
    printf("%d -> ", ptr->data);
    display(ptr->next);

}


// Insert an element
void insBeg(){
    newnode->next = head;
    head = newnode;
}

void insPos() {
    int pos;
    printf("Position: ");
    scanf("%d", &pos);

    if (pos < 1 || pos > size + 1){
        printf("Invalid Entry!\n");
        return;
    }

    int i = 2;
    while(i < pos){ 
        temp = temp->next;
        i++;
    }
    newnode->next = temp->next;
    temp->next = newnode;
}

void insEnd() {
    while(temp->next !=NULL)
        temp = temp->next;
    newnode->next = NULL;
    temp->next = newnode;
    
}

void insert() {
    // Create new node
    newnode = (struct node *) malloc(sizeof(struct node));
    int choice;
    temp = head;
    printf("Element: ");
    scanf("%d", &newnode->data);
    
    printf("\n1 at Beginning \n2 at a Position \n3 at End \nEnter your choice: ");
    scanf("%d", &choice);
    
    switch(choice) 
    {
        case 1:
            insBeg();
            break;  
        case 2:
            insPos();
            break;
        case 3:
            insEnd();
            break;

    }
    size ++;
    display(head);
}

// Delete an element
void delBeg() {
    head = temp->next;
    free(temp);
}

void delPos() {
    int pos;
    printf("Position: ");
    scanf("%d", &pos);
    if (pos < 1 || pos > size) {
        printf("Invalid Entry!\n");
        return;
    }

    int i = 2;
    while(i < pos)
        temp = temp->next;
    delnode = temp->next;
    temp->next = delnode->next;
    free(delnode);
}

void delEnd() {
    while(temp->next != NULL) {
        temp1 = temp;
        temp = temp->next;
    }
    temp1->next = NULL;
    free(temp);
}

void delete() {
    int choice;
    temp = head;
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
    size --;
    display(head);
}

