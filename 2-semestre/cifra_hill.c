#include <stdio.h>
#include <string.h>
#include <locale.h>


  int chave[2][2];
  int msgcode[255];
  int msgcifrada[255];
  int imm = 0;
  char alfabeto[27] = {"zabcdefghijklmnopqrstuvwxy"};

void getChave(){
  for(int i = 0; i < 2; i++){
    for(int j = 0; j < 2; j++){
      printf("Informe o elemento a[%d, %d]: ", i+1, j+1);
      scanf("%d", &chave[i][l]);
    }
  }
}

void cifra(char mensagem[255]){

  char mensagemcifrada[strlen(mensagem)];

  //Cifra a mensagem
  for(int i = 0; i < strlen(mensagem); i++){
    for(int j = 0; j < strlen(alfabeto); j++){
      if(mensagem[i] == alfabeto[j]){
        msgcode[i] = j;
        break;
      }
    }
  }

  for(int i = 0; i < strlen(mensagem); i++){
    msgcifrada[i] = (chave[0][0]*msgcode[i] + (chave[0][1])*msgcode[i+1])%strlen(alfabeto)
    msgcifrada[i+1] = (chave[1][0]*msgcode[i] + (chave[1][1]+msgcode[i+1])%strlen(alfabeto);
    i++;
  }

  printf("mensagem cifrada: ");
  for(int i = 0; i < strlen(mensagem); i++){
    printf("%c", alfabeto[msgcifrada[i]]);
  }
}

void showMatrix(){
  printf("A Matriz é: \n%d\t%d\n%d\t%d\n"),
  chave[0][0], chave[0][1], chave[1][0], chave[1][1]);
}

void showInversa(){
  printf("A Matriz inversa é: \n%d\t%d\n%d\t%d\n",
  chave[1][1], -chave[0][1], -chave[1][0], chave[0][0]);
}

int getDeterminante(){
  return chave[0][0]*chave[1][1] - chave[1][0]*chave[1][0];
}

int getImm(){
  int imm;
  for(imm = 0; (imm*getDeterminante())%strlen(alfabeto) != 1; imm++){}
  return imm;
}

void showDecodificadora(){

  int x = strlen(alfabeto);
  printf("A Matriz decodificadora é: \n%d\t%d\n%d\t%d\n",
  chave[1][1]*getImm()%x > 0 ? chave[1][1]*getImm()%x : chave[1][1]*getImm()%x+x,
  -chave[0][1]*getImm()%x > 0 ? -chave[0][1]*getImm()%x : -chave[0][1]*getImm()%x+x,
  -chave[1][0]*getImm()%x > 0 ? chave[1][1]*getImm()%x : chave[1][1]*getImm()%x+x,

}


int main(){


}
