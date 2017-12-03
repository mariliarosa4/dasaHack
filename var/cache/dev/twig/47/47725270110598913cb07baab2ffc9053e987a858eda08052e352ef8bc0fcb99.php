<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9cf46f58af914c3d12a5c4277e0a560be63bd0b5507b4f462a7c0088cd5b387b extends Twig_Template
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
        $__internal_f545eed5a6a58254970ee127298aa154023f10e3f85d961122e4e4b41fe3ba2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f545eed5a6a58254970ee127298aa154023f10e3f85d961122e4e4b41fe3ba2c->enter($__internal_f545eed5a6a58254970ee127298aa154023f10e3f85d961122e4e4b41fe3ba2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c7677333a6f29adef32da14abeb68d12f9f1cc6009bc7390754c81b5e140c14b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7677333a6f29adef32da14abeb68d12f9f1cc6009bc7390754c81b5e140c14b->enter($__internal_c7677333a6f29adef32da14abeb68d12f9f1cc6009bc7390754c81b5e140c14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f545eed5a6a58254970ee127298aa154023f10e3f85d961122e4e4b41fe3ba2c->leave($__internal_f545eed5a6a58254970ee127298aa154023f10e3f85d961122e4e4b41fe3ba2c_prof);

        
        $__internal_c7677333a6f29adef32da14abeb68d12f9f1cc6009bc7390754c81b5e140c14b->leave($__internal_c7677333a6f29adef32da14abeb68d12f9f1cc6009bc7390754c81b5e140c14b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
