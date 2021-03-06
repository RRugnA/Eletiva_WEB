package fatec.eletivaweb.controller;

import java.io.IOException;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import fatec.eletivaweb.models.Banco;
import fatec.eletivaweb.models.Curso;


public class ShowCursos implements Action {

	@Override
	public String run(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		System.out.println("Listando Cursos");
		
		Banco banco = new Banco();
		List<Curso> lista = banco.getCurso();
			
		request.setAttribute("cursos", lista);
		
		return "forward:listaCursos.jsp";
	}

}
