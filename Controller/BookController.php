<?php

namespace Controller;

class BookController extends Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		//$this->loadModel("Book");
		//$books = $this->book->getAll();	  
		$books = array(
			array(
				'title' => 'Володар перснів',
				'author' => 'Джон Толкін',
				'year' => '1954-1955'
			),

			array(
				'title' => 'Серія книг про Гаррі Поттера',
				'author' => 'Джоан Роулінг',
				'year' => '1997-2007'
			),

			array(
				'title' => 'Хоббіт, або Туди і знову назад',
				'author' => 'Джон Толкін',
				'year' => '1937'
			),

			array(
				'title' => 'Хроніки Нарнії',
				'author' => 'Клайв Льюїс',
				'year' => '1950-1956'
			),

			array(
				'title' => 'Лабіринти Ехо',
				'author' => 'Макс Фрай',
				'year' => '1996-...'
			),

			array(
				'title' => 'Плаский світ',
				'author' => 'Террі Пратчетт',
				'year' => '1983-...'
			),

			array(
				'title' => 'Чарівник Земномор\'я',
				'author' => 'Урсула Ле Гуін',
				'year' => '1968-2001'
			),

			array(
				'title' => 'Хроніки Амберу',
				'author' => 'Роджер Желязни',
				'year' => '1970-1991'
			),
		);

		$this->data("books", $books);

		$this->display("books");
	}

	public function show($id)
	{
		//$book = $this->book->getbyId($id);
		$book = array(
			'title' => 'Володар перснів',
			'author' => 'Джон Толкін',
			'year' => '1954-1955'
		);
		$this->data("book", $book);

		$this->display("show");
	}
}
