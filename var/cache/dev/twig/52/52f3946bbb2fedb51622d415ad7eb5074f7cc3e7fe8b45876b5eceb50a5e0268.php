<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9ba68c83c2c30f20ee1f3c04d495bd7f8d503cc4c3445d9733f151ba3ac36a92 extends Twig_Template
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
        $__internal_f82c2229e4f753dcdd82d48b4cb23b55bd4f4f74e2c6cae75d93f75e52f76a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f82c2229e4f753dcdd82d48b4cb23b55bd4f4f74e2c6cae75d93f75e52f76a1e->enter($__internal_f82c2229e4f753dcdd82d48b4cb23b55bd4f4f74e2c6cae75d93f75e52f76a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d40daa2e1a00d2362ae52538c121f747f8f412b6de3d9a5da75a76c001d1c42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40daa2e1a00d2362ae52538c121f747f8f412b6de3d9a5da75a76c001d1c42f->enter($__internal_d40daa2e1a00d2362ae52538c121f747f8f412b6de3d9a5da75a76c001d1c42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f82c2229e4f753dcdd82d48b4cb23b55bd4f4f74e2c6cae75d93f75e52f76a1e->leave($__internal_f82c2229e4f753dcdd82d48b4cb23b55bd4f4f74e2c6cae75d93f75e52f76a1e_prof);

        
        $__internal_d40daa2e1a00d2362ae52538c121f747f8f412b6de3d9a5da75a76c001d1c42f->leave($__internal_d40daa2e1a00d2362ae52538c121f747f8f412b6de3d9a5da75a76c001d1c42f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
