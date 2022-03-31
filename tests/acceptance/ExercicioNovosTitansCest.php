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
}
