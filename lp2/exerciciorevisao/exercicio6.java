package exercicio;

import java.util.Scanner;

public class exercicio6 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Scanner inp = new Scanner(System.in);
		int opc;
		
		while(true) {
			System.out.print("1) Exerício 1\n2) Exercício 2\n3) Exercício 3\n4) Exercício 4\n5) Exercício 5\n0) encerrar");
			System.out.println("");
			System.out.print("Digite sua opção: ");
			opc = inp.nextInt();
			
			if(opc == 1) {
				System.out.println("Olá, mundo!!!");
			}
			else if(opc == 2) {
				
				String frase;
				int numero;
				
				System.out.println("Digite uma frase: ");
				frase = inp.next();
				System.out.println("Digite o número de vezes: ");
				numero = inp.nextInt();
				System.out.println("");
				for(int c = 0; c < numero; c++) {
					System.out.println(frase);
				}
				
			}
			else if(opc == 3) {
				
				System.out.println("Digite o número de vezes: ");
				int numero = inp.nextInt();
				System.out.println("Digite uma frase: ");
				String frase = inp.next();
				System.out.println("");
				
				for(int c = 0; c < numero; c++) {
					System.out.println(frase);
				}
				
			}
			else if(opc == 4) {
				
				Scanner input = new Scanner(System.in);
				float altura, base, area, perimetro;
				
				System.out.println("Digite a altura: ");
				altura = input.nextFloat();
				System.out.println("Digite a base: ");
				base = input.nextFloat();
				area = base*altura;
				perimetro = 2*(base+altura);
				
				System.out.println("Área: " + area);
				System.out.println("Perímetro: " + perimetro);
				
			}
			else if(opc == 5) {
				int linha, coluna;
				String palavra;
				
				System.out.println("Digite uma palavra: ");
				palavra = inp.next();
				System.out.println("Digite o valor da linha: ");
				linha = inp.nextInt();
				System.out.println("Digite o valor da coluna: ");
				coluna = inp.nextInt();
				
				for(int l = 1; l <= linha; l++) {
					for(int c = 1; c <= coluna; c++) {
						System.out.print(palavra + " ");
					}
					System.out.println("");
				}
			}
			else if(opc == 0) {
				break;
			}
			
			System.out.println("");
			
		}
		

	}

}
