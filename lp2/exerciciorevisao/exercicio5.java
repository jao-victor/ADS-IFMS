package exercicio;

import java.util.Scanner;

public class exercicio6 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Scanner inp = new Scanner(System.in);
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

}
