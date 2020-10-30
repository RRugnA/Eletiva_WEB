<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ taglib uri = "http://java.sun.com/jsp/jstl/core" prefix = "c"%>
<c:url value="/entrada" var="linkEntradaServlet"/>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
<link rel="StyleSheet" type="text/css" href="css/style.css" media="screen" >
<title>Insert title here</title>
</head>
<body>
	<header>
		<nav class="navbar">
			<a href="index.jsp">
				<img class="img.fluid" src="img/logo.png" />
			</a>			
			<h2>Sistema de Gest�o Acad�mica </h2>
			<label></label>
		</nav>
	</header>
	
	<main>
		<ul class="menu-main">
			<li class="li-index">
				<a class="btn menu-header" href="/EletivaWeb/entrada?action=FormAluno" role="button">
					Alunos
				</a>
			</li>
			
			<li class="li-index">
				<a class="btn menu-header" href="/EletivaWeb/entrada?action=FormProfessor" role="button">
					Professores
				</a>
			</li>	
					
			<li class="li-index">
				<a class="btn menu-header" href="/EletivaWeb/entrada?action=FormCurso" role="button">				
					Cursos
				</a>
			</li>
			
			<li class="li-index">
				<a class="btn menu-header" href="/EletivaWeb/entrada?action=FormDisciplina" role="button">
					Disciplinas
				</a>
			</li>
			
			<li class="li-index">
				<a class="btn menu-header" href="/EletivaWeb/entrada?action=FormTurma" role="button">
					Turmas
				</a>
			</li>
		</ul>
	</main>
	
	<footer>		
			<p>Projeto da disciplina Eletiva-Web</p>
			<p>Professor: Claudio Jose Silva Gomes</p>	
	</footer>
</body>
</html>