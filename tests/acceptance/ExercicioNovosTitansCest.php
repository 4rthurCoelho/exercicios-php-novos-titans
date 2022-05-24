<?php


class ExercicioNovosTitansCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // testes
    public function ex1Works(AcceptanceTester $I)
    {
        $I->amOnPage('/ex1');
        $I->see('Exercício 1');
        //Teste somando 8
        $I->fillField('value1', '25');
        $I->fillField('value2', '12');
        $I->click('enviar');
        $I->see('45');
        //Teste subtraindo 5
        $I->fillField('value1', '10');
        $I->fillField('value2', '7');
        $I->click('enviar');
        $I->see('12');
    }

    public function ex2Works(AcceptanceTester $I)
    {
        $I->amOnPage('/ex2');
        $I->see('Exercício 2');
        //Teste divisivel por todos
        $I->fillField('value', '10');
        $I->click('enviar');
        $I->see('O número 10 é divisível por 10, por 5 e por 2!');
        //Teste divisivel por 2
        $I->fillField('value', '24');
        $I->click('enviar');
        $I->see('O número 24 é divisível por 2');
        //Teste divisivel por 5
        $I->fillField('value', '45');
        $I->click('enviar');
        $I->see('O número 45 é divisível por 5');
    }

    public function ex3Works(AcceptanceTester $I)
    {
        $I->amOnPage('/ex3');
        $I->see('Exercício 3');
        //Teste sendo aceita
        $I->fillField('value1', 'Fernanda');
        $I->fillField('value2', 'F');
        $I->fillField('value3', '24');
        $I->click('enviar');
        $I->see('Parabens Fernanda você foi ACEITA:)');
        //Teste não sendo aceito
        $I->fillField('value1', 'João');
        $I->fillField('value2', 'M');
        $I->fillField('value3', '24');
        $I->click('enviar');
        $I->see('João você não foi Aceita(o) pois não atende os requisitos do projeto:('); 
    }
    
    public function ex4Works(AcceptanceTester $I)
    {
        $I->amOnPage('/ex4');
        $I->see('Exercício 4');
        //Teste valores corretos
        $I->fillField('value1', '25');
        $I->fillField('value2', '50');
        $I->fillField('value3', '15');
        $I->click('enviar');
        $I->see('50 25 15');
        //Teste valores iguais
        $I->fillField('value1', '25');
        $I->fillField('value2', '25');
        $I->fillField('value3', '15');
        $I->click('enviar');
        $I->see('Dois valores iguais não são aceitos :('); 
    }

    public function ex5Works(AcceptanceTester $I)
    {
        $I->amOnPage('/ex5');
        $I->see('Exercício 5');
        //Teste Triangulo Escaleno
        $I->fillField('value1', '12');
        $I->fillField('value2', '15');
        $I->fillField('value3', '17');
        $I->click('enviar');
        $I->see('Com estes valores temos um Triangulo Escaleno :)');
        //Teste Triangulo Isosceles
        $I->fillField('value1', '13');
        $I->fillField('value2', '14');
        $I->fillField('value3', '13');
        $I->click('enviar');
        $I->see('Com estes valores temos um Triangulo Isosceles :)');
        //Teste Triangulo Equilatero
        $I->fillField('value1', '17');
        $I->fillField('value2', '17');
        $I->fillField('value3', '17');
        $I->click('enviar');
        $I->see('Com estes valores temos um Triangulo Equilatero :)'); 
    }
    
    public function ex6Works(AcceptanceTester $I)
    {
        $I->amOnPage('/ex6');
        $I->see('Exercício 6');
        //Teste Janeiro
        $I->fillField('value1', '1');
        $I->click('enviar');
        $I->see('Janeiro');
        //Teste Fevereiro
        $I->fillField('value1', '2');
        $I->click('enviar');
        $I->see('Fevereiro');
        //Teste Março
        $I->fillField('value1', '3');
        $I->click('enviar');
        $I->see('Março');
        //Teste Abril
        $I->fillField('value1', '4');
        $I->click('enviar');
        $I->see('Abril');
        //Teste Maio
        $I->fillField('value1', '5');
        $I->click('enviar');
        $I->see('Maio');
        //Teste Junho
        $I->fillField('value1', '6');
        $I->click('enviar');
        $I->see('Junho');
        //Teste Julho
        $I->fillField('value1', '7');
        $I->click('enviar');
        $I->see('Julho');
        //Teste Agosto
        $I->fillField('value1', '8');
        $I->click('enviar');
        $I->see('Agosto');
        //Teste Setembro
        $I->fillField('value1', '9');
        $I->click('enviar');
        $I->see('Setembro');
        //Teste Outubro
        $I->fillField('value1', '10');
        $I->click('enviar');
        $I->see('Outubro');
        //Teste Novembro
        $I->fillField('value1', '11');
        $I->click('enviar');
        $I->see('Novembro');
        //Teste Dezembro
        $I->fillField('value1', '12');
        $I->click('enviar');
        $I->see('Dezembro');
    }

    public function ex7Works(AcceptanceTester $I)
    {
        $I->amOnPage('/ex7');
        $I->see('Exercício 7');
        //Teste professor
        $I->fillField('value1', 'Caio');
        $I->fillField('value2', 'Professor');
        $I->click('enviar');
        $I->see('Professor Caio. Você tem 10 dias a partir da data de empréstimo para fazer a devolução do Livro: Vermelho Branco e Sangue Azul'); 
        //Teste aluno
        $I->fillField('value1', 'Caio');
        $I->fillField('value2', 'Aluno');
        $I->click('enviar');
        $I->see('Aluno: Caio. Você tem 03 dias a partir da data de empréstimo para fazer a devolução do Livro: Vermelho Branco e Sangue Azul');  
    }

    public function ex8Works(AcceptanceTester $I)
    {
        $I->amOnPage('/ex8');
        $I->see('Exercício 8');
        //Teste
        $I->fillField('value1', '3');
        $I->click('enviar');
        $I->see('123'); 
    }

    public function ex9Works(AcceptanceTester $I)
    {
        $I->amOnPage('/ex9');
        $I->see('Exercício 9');
        //Teste
        $I->fillField('value1', '4');
        $I->click('enviar');
        $I->see('SOLSOLSOLSOL'); 
    }

    public function ex10Works(AcceptanceTester $I)
    {
        $I->amOnPage('/ex10');
        $I->see('Exercício 10');
        $I->fillField('value1', '1 2 3 4 5 6 7 8 9 -1 -2 -3 -4 -5 -6 -7 -8  -9 -10 -11');
        $I->click('enviar');
        $I->see('Os vetores positivos são:
        Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 )
        Os vetores negativos são:
        Array ( [0] => -1 [1] => -2 [2] => -3 [3] => -4 [4] => -5 [5] => -6 [6] => -7 [7] => -8 [8] => [9] => -9 [10] => -10 [11] => -11 )
        Soma dos positivos: 45
        Quantidade de negativos: 12');
    }

    public function ex11Works(AcceptanceTester $I)
    {
        $I->amOnPage('/ex11');
        $I->see('Exercício 11');
        //Teste tabuada do 3
        $I->fillField('value1', '3');
        $I->click('enviar');
        $I->see('3 X 0 = 0
        3 X 1 = 3
        3 X 2 = 6
        3 X 3 = 9
        3 X 4 = 12
        3 X 5 = 15
        3 X 6 = 18
        3 X 7 = 21
        3 X 8 = 24
        3 X 9 = 27
        3 X 10 = 30'); 
    }

    public function ex12Works(AcceptanceTester $I)
    {
        $I->amOnPage('/ex12');
        $I->see('Exercício 12');
        //Teste
        $I->fillField('value1', 'Beijo');
        $I->click('enviar');
        $I->see('Beijo
        Beijo Beijo
        Beijo Beijo Beijo
        Beijo Beijo Beijo Beijo
        Beijo Beijo Beijo Beijo Beijo'); 
    }

    public function ex13Works(AcceptanceTester $I)
    {
        $I->amOnPage('/ex13');
        $I->see('Exercício 13');
        //Teste
        $I->fillField('value1', '1 2 3 4 5 150 134 1423 566');
        $I->click('enviar');
        $I->see('2 números foram informados entre 100 e 200'); 
    }

    public function ex14Works(AcceptanceTester $I)
    {
        $I->amOnPage('/ex14');
        $I->see('Exercício 14');
        //Teste
        $I->fillField('altura1', '150');
        $I->fillField('crescimento1', '2');
        $I->fillField('altura2', '170');
        $I->fillField('crescimento2', '3');
        $I->click('enviar');
        $I->see('Serão necessário 0 Anos para que a pessoa 1 seja maior do que pessoa 2.');
        $I->seeInDatabase('Resultados', ['altura1' => '150', 'crescimento1' => '2', 'altura2' => '170', 'crescimento2' => '3']);

        $I->fillField('altura1', '150');
        $I->fillField('crescimento1', '2');
        $I->fillField('altura2', '110');
        $I->fillField('crescimento2', '3');
        $I->click('enviar');
        $I->see('Serão necessário 41 Anos para que a pessoa 1 seja maior do que pessoa 2.');
        $I->seeInDatabase('Resultados', ['altura1' => '150', 'crescimento1' => '2', 'altura2' => '110', 'crescimento2' => '3']);
    }

    
    public function ex15Works(AcceptanceTester $I)
    {
        $I->amOnPage('/ex15');
        $I->see('Exercício 15');
        //Teste
        $I->fillField('massa', '10');
        $I->fillField('perda', '20');
        $I->fillField('tempo', '20');
        $I->click('enviar');
        $I->see('Para a massa ser maior ou igual a 0.10 gramas, serão precisos 7 minutos');
        $I->seeInDatabase('Resultados', ['massa' => '10', 'perda' => '20', 'tempo' => '20']);
    }
    
    public function ex16Works(AcceptanceTester $I)
    {
        $I->amOnPage('/ex16');
        $I->see('Exercício 16');
        //Teste
        $I->fillField('value1', '1 2 3 4 5 6 7 8 9 10 11 12 13 14 15');
        $I->click('enviar');
        $I->see('O Número 1 é impar
        O Número 2 é par
        O Número 3 é impar
        O Número 4 é par
        O Número 5 é impar
        O Número 6 é par
        O Número 7 é impar
        O Número 8 é par
        O Número 9 é impar
        O Número 10 é par
        O Número 11 é impar
        O Número 12 é par
        O Número 13 é impar
        O Número 14 é par
        O Número 15 é impar');
        $I->seeInDatabase('Numeros', ['numeros' => '1 2 3 4 5 6 7 8 9 10 11 12 13 14 15']);
    }

    public function ex17Works(AcceptanceTester $I)
    {
        $I->amOnPage('/ex17');
        $I->see('Exercício 17');
        //Teste
        $I->fillField('value1', '1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20');
        $I->click('enviar');
        $I->see('De todos os numeros informado o maior é o 20
        Já o menor numero é o 1
        Porcentagem de Numeros Pares: 50%
        Soma de todos os numeros: 210');
        $I->seeInDatabase('Resultados', ['numeros' => '1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20', 'maior' => '20', 'menor' => '1', 'porcentagem' => '50', 'soma' => '21']);
        $I->see('Listagem de Dados Salvos');
        $I->see('1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20');
        $I->see('20');
        $I->see('1');
        $I->see('50');
        $I->see('210');
    }

}
