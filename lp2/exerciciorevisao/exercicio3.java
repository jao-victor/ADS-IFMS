package exercicio;

import java.util.Scanner;

public class exercicio3 {
	
	public static void main(String args[]) {
		

		Scanner inp = new Scanner(System.in);
		String frase;
		int numero;
		
		System.out.println("Digite o número de vezes: ");
		numero = inp.nextInt();
		System.out.println("Digite uma frase: ");
		frase = inp.nextLine();
		System.out.println("");
		
		for(int c = 0; c < numero; c++) {
			System.out.println(frase);
		}

		
	}

				
		
}
