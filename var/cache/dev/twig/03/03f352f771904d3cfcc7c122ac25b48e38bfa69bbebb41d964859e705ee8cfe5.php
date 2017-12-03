<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ea2bf1adf33610aae7127de23eabd4c76f592d519eb929223d1b452c817795d5 extends Twig_Template
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
        $__internal_2830233196947d7016619af9cfb75a749d350660c531af9bb9e35bacb2aa013b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2830233196947d7016619af9cfb75a749d350660c531af9bb9e35bacb2aa013b->enter($__internal_2830233196947d7016619af9cfb75a749d350660c531af9bb9e35bacb2aa013b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_797c8de799f18fc8f675598003ab5c2a08deaf96ab2ae64eb0c86a2bed2d8f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797c8de799f18fc8f675598003ab5c2a08deaf96ab2ae64eb0c86a2bed2d8f82->enter($__internal_797c8de799f18fc8f675598003ab5c2a08deaf96ab2ae64eb0c86a2bed2d8f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2830233196947d7016619af9cfb75a749d350660c531af9bb9e35bacb2aa013b->leave($__internal_2830233196947d7016619af9cfb75a749d350660c531af9bb9e35bacb2aa013b_prof);

        
        $__internal_797c8de799f18fc8f675598003ab5c2a08deaf96ab2ae64eb0c86a2bed2d8f82->leave($__internal_797c8de799f18fc8f675598003ab5c2a08deaf96ab2ae64eb0c86a2bed2d8f82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
