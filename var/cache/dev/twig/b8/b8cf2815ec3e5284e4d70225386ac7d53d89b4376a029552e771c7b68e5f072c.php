<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b60c8463566e2be5e09097f3595b0f9e7e853d2c2ecd5693383cf26df9e43075 extends Twig_Template
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
        $__internal_a30583c3e375d22dbae40c879e60fda864bd7ce9a90bed3f298c07e3ed970398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a30583c3e375d22dbae40c879e60fda864bd7ce9a90bed3f298c07e3ed970398->enter($__internal_a30583c3e375d22dbae40c879e60fda864bd7ce9a90bed3f298c07e3ed970398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_742a2d6364b2f41202b3fedd2b361e6a7cdf66c61dbf51022e23e6dd7253155e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742a2d6364b2f41202b3fedd2b361e6a7cdf66c61dbf51022e23e6dd7253155e->enter($__internal_742a2d6364b2f41202b3fedd2b361e6a7cdf66c61dbf51022e23e6dd7253155e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a30583c3e375d22dbae40c879e60fda864bd7ce9a90bed3f298c07e3ed970398->leave($__internal_a30583c3e375d22dbae40c879e60fda864bd7ce9a90bed3f298c07e3ed970398_prof);

        
        $__internal_742a2d6364b2f41202b3fedd2b361e6a7cdf66c61dbf51022e23e6dd7253155e->leave($__internal_742a2d6364b2f41202b3fedd2b361e6a7cdf66c61dbf51022e23e6dd7253155e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
