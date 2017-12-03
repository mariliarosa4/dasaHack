<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_80ddf62ff8cc628531d3ddca2de175b5b3d29ee6648e08290337d4d064fcc8f9 extends Twig_Template
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
        $__internal_3f13d59ecf81d49702348bdcce81e1d155ab601bc80a0cd3621f4d8af942fdca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f13d59ecf81d49702348bdcce81e1d155ab601bc80a0cd3621f4d8af942fdca->enter($__internal_3f13d59ecf81d49702348bdcce81e1d155ab601bc80a0cd3621f4d8af942fdca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_5883979027163bfda05e086f395dc70474405d9a2f4a7d847259cd5d1c6943c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5883979027163bfda05e086f395dc70474405d9a2f4a7d847259cd5d1c6943c1->enter($__internal_5883979027163bfda05e086f395dc70474405d9a2f4a7d847259cd5d1c6943c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3f13d59ecf81d49702348bdcce81e1d155ab601bc80a0cd3621f4d8af942fdca->leave($__internal_3f13d59ecf81d49702348bdcce81e1d155ab601bc80a0cd3621f4d8af942fdca_prof);

        
        $__internal_5883979027163bfda05e086f395dc70474405d9a2f4a7d847259cd5d1c6943c1->leave($__internal_5883979027163bfda05e086f395dc70474405d9a2f4a7d847259cd5d1c6943c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
