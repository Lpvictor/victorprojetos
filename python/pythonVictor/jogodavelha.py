# Jogo da Velha

# Função para desenhar o tabuleiro
def draw_board(board):
    print(board[0] + "|" + board[1] + "|" + board[2])
    print("-|-|-")
    print(board[3] + "|" + board[4] + "|" + board[5])
    print("-|-|-")
    print(board[6] + "|" + board[7] + "|" + board[8])

# Função para verificar se alguém ganhou
def check_win(board, player):
    if (board[0] == player and board[1] == player and board[2] == player) or \
        (board[3] == player and board[4] == player and board[5] == player) or \
        (board[6] == player and board[7] == player and board[8] == player) or \
        (board[0] == player and board[3] == player and board[6] == player) or \
        (board[1] == player and board[4] == player and board[7] == player) or \
        (board[2] == player and board[5] == player and board[8] == player) or \
        (board[0] == player and board[4] == player and board[8] == player) or \
        (board[2] == player and board[4] == player and board[6] == player):
        return True
    else:
        return False

# Função para obter a jogada do jogador
def get_move(board, player):
    valid_move = False
    while not valid_move:
        move = input("Jogador " + player + ", faça sua jogada (1-9): ")
        if move.isdigit() and int(move) in range(1, 10):
            move = int(move) - 1
            if board[move] == " ":
                valid_move = True
                return move
            else:
                print("Essa posição já está ocupada. Tente novamente.")
        else:
            print("Jogada inválida. Tente novamente.")

# Função principal
def main():
    board = [" "] * 9
    players = ["X", "O"]
    turn = 0
    game_over = False
    draw_board(board)
    while not game_over:
        player = players[turn % 2]
        move = get_move(board, player)
        board[move] = player
        draw_board(board)
        if check_win(board, player):
            print("Jogador " + player + " venceu!")
            game_over = True
        elif " " not in board:
            print("Empate!")
            game_over = True
        else:
            turn += 1

if __name__ == "__main__":
    main()
