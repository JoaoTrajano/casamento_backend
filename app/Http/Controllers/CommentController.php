<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Comment;


class CommentController extends Controller
{

    /**
     * Retorna todos os comentários.
     *
     * @return void
     */
    public function index() {
        $comments = Comment::all()->toArray();
        return count($comments) > 0 ? $comments : [];
    }

    /**
     * Retorna os dois últimos comentários.
     *
     * @return array
     */
    public function getLastsComments(): array
    {
        $lastComments = Comment::all()->toArray();
        return count($lastComments) > 0 ? $this->handleComments($lastComments) : [];
    }

    /**
     * Cria um nono comentário.
     * @param Request $request
     * @return array
     */
    public function store(Request $request): array {
        $arrayValues = $request->all();

        foreach ($arrayValues as $key => $value) {
            $arrayValues[$key] = $this->filter($value);
        }

        $result = Comment::create($arrayValues);
        if($result) {
            return ['status' => 'success', 'message' => 'Agradecemos o carinho!'];
        }

        return ['status' => 'error', 'message' => 'Houve um erro. Tente novamente.'];
    }

    /**
     * Faz o tratamento de strings para evitar códigos maliciosos.
     * @param string $value
     * @return string
     */
    public function filter(string $value): string {
        return filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * Retorna os dois últimos comentários.
     * @param array $lastComments
     * @return array
     */
    public function handleComments(array $lastComments): array {
        $totalArray = count($lastComments);
        $lastIndex = $totalArray - 1;
        $penultimateIndex = $totalArray - 2;

        return array(
            $lastComments[$lastIndex],
            $lastComments[$penultimateIndex]
        );
    }
}
