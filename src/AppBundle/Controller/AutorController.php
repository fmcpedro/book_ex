<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Autor;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Controller\LivroController;
use AppBundle\Entity\Livro;


class AutorController extends Controller {

    public function autoresListaAction() {
        $livrosload= new LivroController();
        $livros2=$livrosload->getLivros();


        $autores = array();
        
        $autor1 = new Autor();
        $autor2 = new Autor();
        $autor3 = new Autor();
        $autor4 = new Autor();
        $autor5 = new Autor();
        
        $autor1->setNome("João");
        $autor1->setDataNascimento("04/05/1979");
        $autor1->setLivros(array($livros2[0],$livros2[1]));
        $autores[1]=$autor1;
        $livros2[0]->setAutores($autores[1]);
        $livros2[1]->setAutores($autores[1]);
        
        
        $autor2->setNome("António");
        $autor2->setDataNascimento("07/04/1980");
        $autor2->setLivros(array($livros2[0],$livros2[2]));
        $autores[2]=$autor2;
        $livros2[0]->setAutores($autores[2]);
        $livros2[2]->setAutores($autores[2]);
        
       
        
        $autor3->setNome("José");
        $autor3->setDataNascimento("10/05/1991");
        $autor3->setLivros(array($livros2[1],$livros2[0]));
        $autores[3]=$autor3;
        $livros2[1]->setAutores($autores[3]);
        $livros2[0]->setAutores($autores[3]);
        
        $autor4->setNome("Mário");
        $autor4->setDataNascimento("20/09/1974");
        $autor4->setLivros(array($livros2[1],$livros2[2]));
        $autores[4]=$autor4;
        $livros2[1]->setAutores($autores[4]);
        $livros2[2]->setAutores($autores[4]);
        
        $autor5->setNome("Rui");
        $autor5->setDataNascimento("23/10/1973");
        $autor5->setLivros(array($livros2[1],$livros2[0]));
        $autores[5]=$autor5;
        $livros2[1]->setAutores($autores[5]);
        $livros2[0]->setAutores($autores[5]);
        
  return $this->render('autor/autoresLista.html.twig', array(
            'autores' => $autores));

        }
        
       
    }
    

