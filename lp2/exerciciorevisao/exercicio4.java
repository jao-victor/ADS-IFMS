
package exercicio;

import java.util.Scanner;

public class exercicio4 {
	
	public static void main(String args[]) {
		
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

}
