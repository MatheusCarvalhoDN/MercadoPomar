<main class="form-signin">
    <section class="card-cadastro">
        <form method="POST" enctype="multipart/form-data">
            <input required type="file" name="file" >

            <input required type="text" name="nome" id="">
            <input required type="text" name="preco" id="">
            <select required name="categoria">
                <option value=""> Selecione uma categoria</option>
                <option value="Alimentos"> Alimentos</option>
                <option value="Bebidas"> Bebidas</option>
                <option value="Beleza e Perfumaria"> Beleza e Perfumaria</option>
                <option value="Limpeza"> Limpeza</option>
                <option value="Petshop"> Petshop</option>
            </select>
            <button>cadastrar produto</button>
        </form>
    </section>
</main>