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
        $I->amOnPage('/ex5');
        $I->see('Exercício 5');
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
}
