(defvar pergunta)
(defvar resposta)
(defvar x)

(with-open-file (arquivo "pergresp.txt"
                    :direction :input
                    :if-does-not-exist :error
                    :external-format :iso-8859-1)
  (setq pergunta (read-line arquivo))
  (setq resposta (read-line arquivo))
)

(defun gravatxt (pergunta)
  (with-open-file (arquivo "pergunta.txt"
                    :direction :output
                    :if-exists :supersede
                    :if-does-not-exist :create)
  (format arquivo "~a" pergunta)
  )
)

(defun arvore (pergunta resposta)
  (setq x (cons pergunta resposta))
  (cond
  ((equal x '("Corrimento pelo canal vaginal ou vontade de urinar constante?" . "0")) (gravatxt "Ingua na virilha ou feridas na regiao genital?"))
  ((equal x '("Corrimento pelo canal vaginal ou vontade de urinar constante?" . "1")) (gravatxt "Dor durante relacao sexual ou cheiro ruim na regiao?"))
  ((equal x '("Ingua na virilha ou feridas na regiao genital?" . "0")) (gravatxt "Tem verrugas na regiao genital?"))
  ((equal x '("Ingua na virilha ou feridas na regiao genital?" . "1")) (gravatxt "Dor nos musculos?")) 
  ((equal x '("Tem verrugas na regiao genital?" . "0")) (gravatxt "Voce e aluno do Malvezzi?"))
  ((equal x '("Tem verrugas na regiao genital?" . "1")) (gravatxt "3")) ;HPV
  ((equal x '("Voce e aluno do Malvezzi?" . "0")) (gravatxt "1")) ;LIVRE DE DST
  ((equal x '("Voce e aluno do Malvezzi?" . "1")) (gravatxt "2")) ;MAIS SERIO QUE DST
  ((equal x '("Dor nos musculos?" . "0")) (gravatxt "Ganglios linfaticos inchados?"))
  ((equal x '("Dor nos musculos?" . "1")) (gravatxt "8")) ;SIFILIS
  ((equal x '("Ganglios linfaticos inchados?" . "0")) (gravatxt "Ardor e dor ao defecar?"))
  ((equal x '("Ganglios linfaticos inchados?" . "1")) (gravatxt "7")) ;CANCRO MOLE
  ((equal x '("Ardor e dor ao defecar?" . "0")) (gravatxt "Falta de apetite?"))
  ((equal x '("Ardor e dor ao defecar?" . "1")) (gravatxt "6")) ;HERPES GENITAL
  ((equal x '("Falta de apetite?" . "0")) (gravatxt "4")) ;DONOVANOSE
  ((equal x '("Falta de apetite?" . "1")) (gravatxt "5")) ;LINFOGRANULOMA VENEREO
  ((equal x '("Dor durante relacao sexual ou cheiro ruim na regiao?" . "0")) (gravatxt "9")) ;MICOPLASMA
  ((equal x '("Dor durante relacao sexual ou cheiro ruim na regiao?" . "1")) (gravatxt "Dor na parte inferior da barriga?" ))
  ((equal x '("Dor na parte inferior da barriga?" . "0")) (gravatxt "10")) ;TRICOMONIASE
  ((equal x '("Dor na parte inferior da barriga?" . "1")) (gravatxt "11")) ;GONORREIA E CLAMIDIA
  )
)

(arvore pergunta resposta)

; 01 - LIVRE DE DST
; 02 - MAIS SERIO QUE DST
; 03 - HPV
; 04 - DONOVANOSE
; 05 - LINFOGRANULOMA VENEREO
; 06 - HERPES GENITAL
; 07 - CANCRO MOLE
; 08 - SIFILIS
; 09 - MICOPLASMA
; 10 - TRICOMONIASE
; 11 - GONORREIA OU CLAMIDIA
