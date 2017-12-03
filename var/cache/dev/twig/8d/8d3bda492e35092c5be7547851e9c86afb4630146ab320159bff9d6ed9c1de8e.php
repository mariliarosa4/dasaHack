<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1016fd08ddf20257e0d706e70ef21793052c0e71d719a1e4b2afd56a5320f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29240c542eb86270fa025fa4481d6883277384000358b489dea7262bb1d9018a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29240c542eb86270fa025fa4481d6883277384000358b489dea7262bb1d9018a->enter($__internal_29240c542eb86270fa025fa4481d6883277384000358b489dea7262bb1d9018a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e6db81aa1cf6eb6957edc93f71f5bb4986249f7d044231a14fe539a5ea4b87bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6db81aa1cf6eb6957edc93f71f5bb4986249f7d044231a14fe539a5ea4b87bd->enter($__internal_e6db81aa1cf6eb6957edc93f71f5bb4986249f7d044231a14fe539a5ea4b87bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29240c542eb86270fa025fa4481d6883277384000358b489dea7262bb1d9018a->leave($__internal_29240c542eb86270fa025fa4481d6883277384000358b489dea7262bb1d9018a_prof);

        
        $__internal_e6db81aa1cf6eb6957edc93f71f5bb4986249f7d044231a14fe539a5ea4b87bd->leave($__internal_e6db81aa1cf6eb6957edc93f71f5bb4986249f7d044231a14fe539a5ea4b87bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7dc39909874e30cd1b33d5f7dcb07a0ae7efa9188ab41bf6e0c23e9599cdf919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc39909874e30cd1b33d5f7dcb07a0ae7efa9188ab41bf6e0c23e9599cdf919->enter($__internal_7dc39909874e30cd1b33d5f7dcb07a0ae7efa9188ab41bf6e0c23e9599cdf919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e295a549dc90c20eac27d752ee62138c2cc1418102fa9f4ef3327fd6bf4e6ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e295a549dc90c20eac27d752ee62138c2cc1418102fa9f4ef3327fd6bf4e6ea0->enter($__internal_e295a549dc90c20eac27d752ee62138c2cc1418102fa9f4ef3327fd6bf4e6ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e295a549dc90c20eac27d752ee62138c2cc1418102fa9f4ef3327fd6bf4e6ea0->leave($__internal_e295a549dc90c20eac27d752ee62138c2cc1418102fa9f4ef3327fd6bf4e6ea0_prof);

        
        $__internal_7dc39909874e30cd1b33d5f7dcb07a0ae7efa9188ab41bf6e0c23e9599cdf919->leave($__internal_7dc39909874e30cd1b33d5f7dcb07a0ae7efa9188ab41bf6e0c23e9599cdf919_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_95af688d34655c333c50a1b1a8c8ba63b92ce5985cf06716b8a1289c1681df63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95af688d34655c333c50a1b1a8c8ba63b92ce5985cf06716b8a1289c1681df63->enter($__internal_95af688d34655c333c50a1b1a8c8ba63b92ce5985cf06716b8a1289c1681df63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_796cf25762be7b4e8d7214aef83aaa9a6ad1c75beada623845d6f89b9a789705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796cf25762be7b4e8d7214aef83aaa9a6ad1c75beada623845d6f89b9a789705->enter($__internal_796cf25762be7b4e8d7214aef83aaa9a6ad1c75beada623845d6f89b9a789705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_796cf25762be7b4e8d7214aef83aaa9a6ad1c75beada623845d6f89b9a789705->leave($__internal_796cf25762be7b4e8d7214aef83aaa9a6ad1c75beada623845d6f89b9a789705_prof);

        
        $__internal_95af688d34655c333c50a1b1a8c8ba63b92ce5985cf06716b8a1289c1681df63->leave($__internal_95af688d34655c333c50a1b1a8c8ba63b92ce5985cf06716b8a1289c1681df63_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e309190e41f21174a6c9cf77dafc542958e274ef594b0f3b3b96fbf357b254e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e309190e41f21174a6c9cf77dafc542958e274ef594b0f3b3b96fbf357b254e0->enter($__internal_e309190e41f21174a6c9cf77dafc542958e274ef594b0f3b3b96fbf357b254e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f6e11eb5350587fdafc6599bc92241578e32ffc5b22d9882b2d9fd57a2e0ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6e11eb5350587fdafc6599bc92241578e32ffc5b22d9882b2d9fd57a2e0ab4->enter($__internal_6f6e11eb5350587fdafc6599bc92241578e32ffc5b22d9882b2d9fd57a2e0ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6f6e11eb5350587fdafc6599bc92241578e32ffc5b22d9882b2d9fd57a2e0ab4->leave($__internal_6f6e11eb5350587fdafc6599bc92241578e32ffc5b22d9882b2d9fd57a2e0ab4_prof);

        
        $__internal_e309190e41f21174a6c9cf77dafc542958e274ef594b0f3b3b96fbf357b254e0->leave($__internal_e309190e41f21174a6c9cf77dafc542958e274ef594b0f3b3b96fbf357b254e0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
