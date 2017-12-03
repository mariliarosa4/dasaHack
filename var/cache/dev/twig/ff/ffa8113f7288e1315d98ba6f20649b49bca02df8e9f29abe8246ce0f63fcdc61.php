<?php

/* login.html.twig */
class __TwigTemplate_9f79a884d3e527b8c9a4ec998b3595990bdafbad3bc15f77770f4b0afc00dc93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_553cdc64617236880652cd500237ece5cdb8d70b78d9243141704a443c7aed68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_553cdc64617236880652cd500237ece5cdb8d70b78d9243141704a443c7aed68->enter($__internal_553cdc64617236880652cd500237ece5cdb8d70b78d9243141704a443c7aed68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_fb28a1eb38e51b9307d46d6ca3f83b3a02c220b74421a3ea6e9ca5d517067212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb28a1eb38e51b9307d46d6ca3f83b3a02c220b74421a3ea6e9ca5d517067212->enter($__internal_fb28a1eb38e51b9307d46d6ca3f83b3a02c220b74421a3ea6e9ca5d517067212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>

    <head>
        <!--Import Google Icon Font-->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Import materialize.css-->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <link rel=\"stylesheet\" type = \"text/css\" href=\"../materialize/css/materialize.min.css\">
        <link rel=\"stylesheet\" type = \"text/css\" href=\"../assets/css/style.css\">


    </head>

    <body>
        <div class=\"section\"></div>
        <main>
            <center>
                ";
        // line 24
        echo "                <div class=\"section\"></div>
                <div class=\"section\"></div>


                <div class=\"container\">

                    <div class=\"z-depth-1 grey lighten-4 row\" style=\"display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;\">

                        <div class=\"col s12\" >
                            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            <h5 class=\"teal-text\">Ficha de atendimento de genética clínica </br></br> Login</h5>
                            <div class='row'>
                                <div class='col s12'>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='input-field col s12'>
                                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "validate")));
        echo "
                                    <label for='form_email'>Enter your email</label>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='input-field col s12'>
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "senha", array()), 'row', array("attr" => array("class" => "validate")));
        echo "

                                    <label for='form_senha'>Enter your password</label>
                                </div>
                                <label style='float: right;'>
                                    <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
                                </label>
                            </div>

                            <br />
                            <center>
                                <div class='row'>
                                    <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect '>Login</button>
                                </div>
                            </center>
                            ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                    </div>
                </div>

            </center>


        </main>

        <!--Import jQuery before materialize.js-->
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"../materialize/js/materialize.min.js\"></script>
    </body>

</html>
";
        
        $__internal_553cdc64617236880652cd500237ece5cdb8d70b78d9243141704a443c7aed68->leave($__internal_553cdc64617236880652cd500237ece5cdb8d70b78d9243141704a443c7aed68_prof);

        
        $__internal_fb28a1eb38e51b9307d46d6ca3f83b3a02c220b74421a3ea6e9ca5d517067212->leave($__internal_fb28a1eb38e51b9307d46d6ca3f83b3a02c220b74421a3ea6e9ca5d517067212_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 64,  82 => 49,  72 => 42,  60 => 33,  49 => 24,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

    <head>

    <head>
        <!--Import Google Icon Font-->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Import materialize.css-->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <link rel=\"stylesheet\" type = \"text/css\" href=\"../materialize/css/materialize.min.css\">
        <link rel=\"stylesheet\" type = \"text/css\" href=\"../assets/css/style.css\">


    </head>

    <body>
        <div class=\"section\"></div>
        <main>
            <center>
                {#  <img class=\"responsive-img\" style=\"width: 250px;\" src=\"https://i.imgur.com/ax0NCsK.gif\" />#}
                <div class=\"section\"></div>
                <div class=\"section\"></div>


                <div class=\"container\">

                    <div class=\"z-depth-1 grey lighten-4 row\" style=\"display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;\">

                        <div class=\"col s12\" >
                            {{ form_start(form) }}
                            <h5 class=\"teal-text\">Ficha de atendimento de genética clínica </br></br> Login</h5>
                            <div class='row'>
                                <div class='col s12'>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='input-field col s12'>
                                    {{form_row(form.email, { 'attr' : {  'class' : 'validate' }})}}
                                    <label for='form_email'>Enter your email</label>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='input-field col s12'>
                                    {{form_row(form.senha, { 'attr' : { 'class' : 'validate' }})}}

                                    <label for='form_senha'>Enter your password</label>
                                </div>
                                <label style='float: right;'>
                                    <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
                                </label>
                            </div>

                            <br />
                            <center>
                                <div class='row'>
                                    <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect '>Login</button>
                                </div>
                            </center>
                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>

            </center>


        </main>

        <!--Import jQuery before materialize.js-->
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"../materialize/js/materialize.min.js\"></script>
    </body>

</html>
", "login.html.twig", "C:\\xampp\\htdocs\\dasaHack\\app\\Resources\\views\\login.html.twig");
    }
}
