<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Livro;
use AppBundle\Entity\Autor;
use AppBundle\Entity\Editora;
use AppBundle\Entity\Coleccao;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LivroController extends Controller {

    public function getLivros(){
        $autores = array();
        $editoras = array();
        $coleccoes = array();

        $livros = array();


//Set Autores
        $autor1 = new Autor();
        $autor1->setNome("Danielle Steel");
        $autor1->setDataNascimento("07/03/1974");
        $autores[1] = $autor1;

        $autor2 = new Autor();
        $autor2->setNome("Richard Zimler");
        $autor2->setDataNascimento("10/05/1976");
        $autores[2] = $autor2;


        $autor3 = new Autor();
        $autor3->setNome("Kate Raworth ");
        $autor3->setDataNascimento("20/10/1977");
        $autores[3] = $autor3;

//Set Editoras
        $editora1 = new Editora();
        $editora1->setNome("Bertrand Editora");
        $editora1->setMorada("Rua da Aventura nº 10");
        $editoras[1] = $editora1;

        $editora2 = new Editora();
        $editora2->setNome("Porto Editora");
        $editora2->setMorada("Rua da Escrita nº 22");
        $editoras[2] = $editora2;

        $editora3 = new Editora();
        $editora3->setNome("Temas e Debates");
        $editora3->setMorada("Rua dos Debates");
        $editoras[3] = $editora3;

//Set Colecções
        $coleccao1 = new Coleccao();
        $coleccao1->setNome("Folha Grandes");
        $coleccoes[1] = $coleccao1;

        $coleccao2 = new Coleccao();
        $coleccao2->setNome("Grandes Nomes da Literatura");
        $coleccoes[2] = $coleccao2;

        $coleccao3 = new Coleccao();
        $coleccao3->setNome("Grandes Nomes do Pensamento");
        $coleccoes[3] = $coleccao3;


//Set Livros
        $livro1 = new Livro();
        $livro1->setTitulo("Solteiros Incorrigiveis");
        $livro1->setIsbn("123456789");
        $livro1->setDataLancamento("04/04/2010");
        $livro1->setAutores(array($autores[1]));
        $livro1->setEditora(array($editoras[1]));
        $livro1->setColeccoes(array($coleccoes[1]));
        $livros[0] = $livro1;


        $livro2 = new Livro();
        $livro2->setTitulo("O Guardião da Aurora");
        $livro2->setIsbn("987654321");
        $livro2->setDataLancamento("06/04/2011");
        $livro2->setAutores(array($autores[2]));
        $livro2->setEditora(array($editoras[2]));
        $livro2->setColeccoes(array($coleccoes[2]));
        $livros[1] = $livro2;


        $livro3 = new Livro();
        $livro3->setTitulo("Economia Donut");
        $livro3->setIsbn("I468745265");
        $livro3->setDataLancamento("09/05/2012");
        $livro3->setAutores(array($autores[3]));
        $livro3->setEditora(array($editoras[3]));
        $livro3->setColeccoes(array($coleccoes[3]));
        $livros[2] = $livro3;
        
        return $livros;
        
        
    }
    
    public function livrosListaAction() {
       
        $livros=$this->getLivros();
         return $this->render('livro/livrosLista.html.twig', array(
                    'livros' => $livros));
    }
    
    public function livrosShowDetailsAction($isbn){
    
        $livro=new Livro();
        $livros=$this->getLivros();
        
        foreach ($livros as $livro) {
            if($isbn == $livro->getIsbn()){
                return $this->render('livro/livrosListaDetails.html.twig', array(
            'livro' => $livro));}
            }
            
        }
        

        
        }


