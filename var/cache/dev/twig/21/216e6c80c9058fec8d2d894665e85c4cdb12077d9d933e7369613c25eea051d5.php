<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_37a2b8842ee708c26f6fa6e486014cd70fc5b8eb23a3963d7365c6bde6c61abc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ba776fa2cb0dc68d4da993a8d2e02f14bf5b77c3461aebb916f4c68f8d352e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ba776fa2cb0dc68d4da993a8d2e02f14bf5b77c3461aebb916f4c68f8d352e9->enter($__internal_5ba776fa2cb0dc68d4da993a8d2e02f14bf5b77c3461aebb916f4c68f8d352e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_ecb04b7a913f192708fe89cba4d6821d69ee30608ce141f01c01fa72d3a1ed80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb04b7a913f192708fe89cba4d6821d69ee30608ce141f01c01fa72d3a1ed80->enter($__internal_ecb04b7a913f192708fe89cba4d6821d69ee30608ce141f01c01fa72d3a1ed80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_label', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('form_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('choice_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('date_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('radio_row', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_5ba776fa2cb0dc68d4da993a8d2e02f14bf5b77c3461aebb916f4c68f8d352e9->leave($__internal_5ba776fa2cb0dc68d4da993a8d2e02f14bf5b77c3461aebb916f4c68f8d352e9_prof);

        
        $__internal_ecb04b7a913f192708fe89cba4d6821d69ee30608ce141f01c01fa72d3a1ed80->leave($__internal_ecb04b7a913f192708fe89cba4d6821d69ee30608ce141f01c01fa72d3a1ed80_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_523a1f09702f5f7a1eae50fed6373e7e32f64ab11b0760cab5bd64e069c2a618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523a1f09702f5f7a1eae50fed6373e7e32f64ab11b0760cab5bd64e069c2a618->enter($__internal_523a1f09702f5f7a1eae50fed6373e7e32f64ab11b0760cab5bd64e069c2a618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_38d2cc3078aab67386bf5f909ce6c82f4e4f4398a8c6dae5ddf39de34a9329b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d2cc3078aab67386bf5f909ce6c82f4e4f4398a8c6dae5ddf39de34a9329b3->enter($__internal_38d2cc3078aab67386bf5f909ce6c82f4e4f4398a8c6dae5ddf39de34a9329b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_38d2cc3078aab67386bf5f909ce6c82f4e4f4398a8c6dae5ddf39de34a9329b3->leave($__internal_38d2cc3078aab67386bf5f909ce6c82f4e4f4398a8c6dae5ddf39de34a9329b3_prof);

        
        $__internal_523a1f09702f5f7a1eae50fed6373e7e32f64ab11b0760cab5bd64e069c2a618->leave($__internal_523a1f09702f5f7a1eae50fed6373e7e32f64ab11b0760cab5bd64e069c2a618_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_8b3657bee2c1cf071c0b977ce616db5d853cbc141b9e9babbcb806048ab3d574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b3657bee2c1cf071c0b977ce616db5d853cbc141b9e9babbcb806048ab3d574->enter($__internal_8b3657bee2c1cf071c0b977ce616db5d853cbc141b9e9babbcb806048ab3d574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_36486a888a9c68fffb42853a808d0f664aca28cb5c0ce7d4bcfac1c17427b1e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36486a888a9c68fffb42853a808d0f664aca28cb5c0ce7d4bcfac1c17427b1e8->enter($__internal_36486a888a9c68fffb42853a808d0f664aca28cb5c0ce7d4bcfac1c17427b1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_36486a888a9c68fffb42853a808d0f664aca28cb5c0ce7d4bcfac1c17427b1e8->leave($__internal_36486a888a9c68fffb42853a808d0f664aca28cb5c0ce7d4bcfac1c17427b1e8_prof);

        
        $__internal_8b3657bee2c1cf071c0b977ce616db5d853cbc141b9e9babbcb806048ab3d574->leave($__internal_8b3657bee2c1cf071c0b977ce616db5d853cbc141b9e9babbcb806048ab3d574_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_46a057326f74ba8ae8d491ec30444589ccfc09d12d375a4a54f83117b6abdc46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a057326f74ba8ae8d491ec30444589ccfc09d12d375a4a54f83117b6abdc46->enter($__internal_46a057326f74ba8ae8d491ec30444589ccfc09d12d375a4a54f83117b6abdc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_39c6492e44fa6acb1aa0b2552f009502e85ed993b9600686e984cb7a54f62b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c6492e44fa6acb1aa0b2552f009502e85ed993b9600686e984cb7a54f62b7c->enter($__internal_39c6492e44fa6acb1aa0b2552f009502e85ed993b9600686e984cb7a54f62b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_39c6492e44fa6acb1aa0b2552f009502e85ed993b9600686e984cb7a54f62b7c->leave($__internal_39c6492e44fa6acb1aa0b2552f009502e85ed993b9600686e984cb7a54f62b7c_prof);

        
        $__internal_46a057326f74ba8ae8d491ec30444589ccfc09d12d375a4a54f83117b6abdc46->leave($__internal_46a057326f74ba8ae8d491ec30444589ccfc09d12d375a4a54f83117b6abdc46_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_e925997d3edeb6d5228d1c403d6d887b3ab762ee3423d243205652a3f6dbdd24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e925997d3edeb6d5228d1c403d6d887b3ab762ee3423d243205652a3f6dbdd24->enter($__internal_e925997d3edeb6d5228d1c403d6d887b3ab762ee3423d243205652a3f6dbdd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_7b103394b72b20c11c7112b05f3c57b698a41d247b0708eab78b9945d924f7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b103394b72b20c11c7112b05f3c57b698a41d247b0708eab78b9945d924f7a9->enter($__internal_7b103394b72b20c11c7112b05f3c57b698a41d247b0708eab78b9945d924f7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_af071429696df9b78c066bff4d1cc7cf8701facf8c09c7a7c39b3f358a086c8e = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_9e59e35d701d4d38c0902c856c679715395128bbb04d32a270c234988bd70d0b = "{{") && ('' === $__internal_9e59e35d701d4d38c0902c856c679715395128bbb04d32a270c234988bd70d0b || 0 === strpos($__internal_af071429696df9b78c066bff4d1cc7cf8701facf8c09c7a7c39b3f358a086c8e, $__internal_9e59e35d701d4d38c0902c856c679715395128bbb04d32a270c234988bd70d0b)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_7b103394b72b20c11c7112b05f3c57b698a41d247b0708eab78b9945d924f7a9->leave($__internal_7b103394b72b20c11c7112b05f3c57b698a41d247b0708eab78b9945d924f7a9_prof);

        
        $__internal_e925997d3edeb6d5228d1c403d6d887b3ab762ee3423d243205652a3f6dbdd24->leave($__internal_e925997d3edeb6d5228d1c403d6d887b3ab762ee3423d243205652a3f6dbdd24_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_0e7eaa0feb3795322f3a54eddf58b21282b418d417213cc3fba9403a933a6fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7eaa0feb3795322f3a54eddf58b21282b418d417213cc3fba9403a933a6fc8->enter($__internal_0e7eaa0feb3795322f3a54eddf58b21282b418d417213cc3fba9403a933a6fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_58869fbe86705265e2d0faf02c9b920ec20f8cc76a7daf7bf31732bea6956545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58869fbe86705265e2d0faf02c9b920ec20f8cc76a7daf7bf31732bea6956545->enter($__internal_58869fbe86705265e2d0faf02c9b920ec20f8cc76a7daf7bf31732bea6956545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_58869fbe86705265e2d0faf02c9b920ec20f8cc76a7daf7bf31732bea6956545->leave($__internal_58869fbe86705265e2d0faf02c9b920ec20f8cc76a7daf7bf31732bea6956545_prof);

        
        $__internal_0e7eaa0feb3795322f3a54eddf58b21282b418d417213cc3fba9403a933a6fc8->leave($__internal_0e7eaa0feb3795322f3a54eddf58b21282b418d417213cc3fba9403a933a6fc8_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_e61814a6ffa4172704c1fec8a5c6c4371b3ace8d07c9353c8bd12e1f611d6d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e61814a6ffa4172704c1fec8a5c6c4371b3ace8d07c9353c8bd12e1f611d6d90->enter($__internal_e61814a6ffa4172704c1fec8a5c6c4371b3ace8d07c9353c8bd12e1f611d6d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_31040723ee2bac3e1cdebe8d46959d3723f1e220006504f2d48656b5e99047a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31040723ee2bac3e1cdebe8d46959d3723f1e220006504f2d48656b5e99047a9->enter($__internal_31040723ee2bac3e1cdebe8d46959d3723f1e220006504f2d48656b5e99047a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_31040723ee2bac3e1cdebe8d46959d3723f1e220006504f2d48656b5e99047a9->leave($__internal_31040723ee2bac3e1cdebe8d46959d3723f1e220006504f2d48656b5e99047a9_prof);

        
        $__internal_e61814a6ffa4172704c1fec8a5c6c4371b3ace8d07c9353c8bd12e1f611d6d90->leave($__internal_e61814a6ffa4172704c1fec8a5c6c4371b3ace8d07c9353c8bd12e1f611d6d90_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_e5f2b17b8de6d17499e9084a8005ff6deff9b10d25009ac80b05a074506fb1ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f2b17b8de6d17499e9084a8005ff6deff9b10d25009ac80b05a074506fb1ad->enter($__internal_e5f2b17b8de6d17499e9084a8005ff6deff9b10d25009ac80b05a074506fb1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_6335bd323d902e9eff39385a29035b1415902faa0fcc799f264a8616fad4b677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6335bd323d902e9eff39385a29035b1415902faa0fcc799f264a8616fad4b677->enter($__internal_6335bd323d902e9eff39385a29035b1415902faa0fcc799f264a8616fad4b677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_6335bd323d902e9eff39385a29035b1415902faa0fcc799f264a8616fad4b677->leave($__internal_6335bd323d902e9eff39385a29035b1415902faa0fcc799f264a8616fad4b677_prof);

        
        $__internal_e5f2b17b8de6d17499e9084a8005ff6deff9b10d25009ac80b05a074506fb1ad->leave($__internal_e5f2b17b8de6d17499e9084a8005ff6deff9b10d25009ac80b05a074506fb1ad_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_4bfbbd14624c6ace87cc285343fa22edfe8d27e29c49077e278a91a24303580b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bfbbd14624c6ace87cc285343fa22edfe8d27e29c49077e278a91a24303580b->enter($__internal_4bfbbd14624c6ace87cc285343fa22edfe8d27e29c49077e278a91a24303580b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_63d39f74441bdfa8973856e0f03ec6123d779d2d77493c141678f1a974b702d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d39f74441bdfa8973856e0f03ec6123d779d2d77493c141678f1a974b702d4->enter($__internal_63d39f74441bdfa8973856e0f03ec6123d779d2d77493c141678f1a974b702d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_63d39f74441bdfa8973856e0f03ec6123d779d2d77493c141678f1a974b702d4->leave($__internal_63d39f74441bdfa8973856e0f03ec6123d779d2d77493c141678f1a974b702d4_prof);

        
        $__internal_4bfbbd14624c6ace87cc285343fa22edfe8d27e29c49077e278a91a24303580b->leave($__internal_4bfbbd14624c6ace87cc285343fa22edfe8d27e29c49077e278a91a24303580b_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_04f847411d1a16a91488fd121a9ae631581786066cded757874bf32374365a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f847411d1a16a91488fd121a9ae631581786066cded757874bf32374365a46->enter($__internal_04f847411d1a16a91488fd121a9ae631581786066cded757874bf32374365a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_ed313ed6c8bd6ab3ce1c2b8cc0648bbdcef6c969fb297ecbcc7915428b4764f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed313ed6c8bd6ab3ce1c2b8cc0648bbdcef6c969fb297ecbcc7915428b4764f5->enter($__internal_ed313ed6c8bd6ab3ce1c2b8cc0648bbdcef6c969fb297ecbcc7915428b4764f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_ed313ed6c8bd6ab3ce1c2b8cc0648bbdcef6c969fb297ecbcc7915428b4764f5->leave($__internal_ed313ed6c8bd6ab3ce1c2b8cc0648bbdcef6c969fb297ecbcc7915428b4764f5_prof);

        
        $__internal_04f847411d1a16a91488fd121a9ae631581786066cded757874bf32374365a46->leave($__internal_04f847411d1a16a91488fd121a9ae631581786066cded757874bf32374365a46_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_e915158959e04914907351bbcef3a7d2e78c8396eddf6a4a168f1db2f6e8ddd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e915158959e04914907351bbcef3a7d2e78c8396eddf6a4a168f1db2f6e8ddd7->enter($__internal_e915158959e04914907351bbcef3a7d2e78c8396eddf6a4a168f1db2f6e8ddd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_65bacf3b007c3048ca2f8806cfad81c529bf8cb9c4f92856ae0a7d22bd53232d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65bacf3b007c3048ca2f8806cfad81c529bf8cb9c4f92856ae0a7d22bd53232d->enter($__internal_65bacf3b007c3048ca2f8806cfad81c529bf8cb9c4f92856ae0a7d22bd53232d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_65bacf3b007c3048ca2f8806cfad81c529bf8cb9c4f92856ae0a7d22bd53232d->leave($__internal_65bacf3b007c3048ca2f8806cfad81c529bf8cb9c4f92856ae0a7d22bd53232d_prof);

        
        $__internal_e915158959e04914907351bbcef3a7d2e78c8396eddf6a4a168f1db2f6e8ddd7->leave($__internal_e915158959e04914907351bbcef3a7d2e78c8396eddf6a4a168f1db2f6e8ddd7_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_13bb07cbd3b63ff88713ed3d8ecc27a44602f76b753dd82f90fa789c451f7f07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13bb07cbd3b63ff88713ed3d8ecc27a44602f76b753dd82f90fa789c451f7f07->enter($__internal_13bb07cbd3b63ff88713ed3d8ecc27a44602f76b753dd82f90fa789c451f7f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_76d9fbd4dd6ff8d5608c4b21a8cf115d49513923dda3ea62e88d4e8b1817dd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d9fbd4dd6ff8d5608c4b21a8cf115d49513923dda3ea62e88d4e8b1817dd76->enter($__internal_76d9fbd4dd6ff8d5608c4b21a8cf115d49513923dda3ea62e88d4e8b1817dd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_76d9fbd4dd6ff8d5608c4b21a8cf115d49513923dda3ea62e88d4e8b1817dd76->leave($__internal_76d9fbd4dd6ff8d5608c4b21a8cf115d49513923dda3ea62e88d4e8b1817dd76_prof);

        
        $__internal_13bb07cbd3b63ff88713ed3d8ecc27a44602f76b753dd82f90fa789c451f7f07->leave($__internal_13bb07cbd3b63ff88713ed3d8ecc27a44602f76b753dd82f90fa789c451f7f07_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a19dd07d772a06ad01b7a79cb1f86c2c468f4fbc9f75fd4c3299ba12d0d2650e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19dd07d772a06ad01b7a79cb1f86c2c468f4fbc9f75fd4c3299ba12d0d2650e->enter($__internal_a19dd07d772a06ad01b7a79cb1f86c2c468f4fbc9f75fd4c3299ba12d0d2650e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_c6adf8f16755e7753fa873a44f3cac4c3810bce632cfb7f7109ed70ffab16422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6adf8f16755e7753fa873a44f3cac4c3810bce632cfb7f7109ed70ffab16422->enter($__internal_c6adf8f16755e7753fa873a44f3cac4c3810bce632cfb7f7109ed70ffab16422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_c6adf8f16755e7753fa873a44f3cac4c3810bce632cfb7f7109ed70ffab16422->leave($__internal_c6adf8f16755e7753fa873a44f3cac4c3810bce632cfb7f7109ed70ffab16422_prof);

        
        $__internal_a19dd07d772a06ad01b7a79cb1f86c2c468f4fbc9f75fd4c3299ba12d0d2650e->leave($__internal_a19dd07d772a06ad01b7a79cb1f86c2c468f4fbc9f75fd4c3299ba12d0d2650e_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_df3aca14104f01509e86de0578755807bac51e61ceeb0bf38dfb0a0bc7c4d767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df3aca14104f01509e86de0578755807bac51e61ceeb0bf38dfb0a0bc7c4d767->enter($__internal_df3aca14104f01509e86de0578755807bac51e61ceeb0bf38dfb0a0bc7c4d767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_eaafd8cce2747364863855b5d3215e00a9678a2d11742fc0d7fd1400d48be334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaafd8cce2747364863855b5d3215e00a9678a2d11742fc0d7fd1400d48be334->enter($__internal_eaafd8cce2747364863855b5d3215e00a9678a2d11742fc0d7fd1400d48be334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_eaafd8cce2747364863855b5d3215e00a9678a2d11742fc0d7fd1400d48be334->leave($__internal_eaafd8cce2747364863855b5d3215e00a9678a2d11742fc0d7fd1400d48be334_prof);

        
        $__internal_df3aca14104f01509e86de0578755807bac51e61ceeb0bf38dfb0a0bc7c4d767->leave($__internal_df3aca14104f01509e86de0578755807bac51e61ceeb0bf38dfb0a0bc7c4d767_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a8445e50f8d6b4fbdd1806319e702be7a3a3c0bf135a064da564ccb4c1fbfdf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8445e50f8d6b4fbdd1806319e702be7a3a3c0bf135a064da564ccb4c1fbfdf0->enter($__internal_a8445e50f8d6b4fbdd1806319e702be7a3a3c0bf135a064da564ccb4c1fbfdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_5a8d65e26f3579ba4603bdf2ed7648b07877bf383d2d37cde993215419335177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8d65e26f3579ba4603bdf2ed7648b07877bf383d2d37cde993215419335177->enter($__internal_5a8d65e26f3579ba4603bdf2ed7648b07877bf383d2d37cde993215419335177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_5a8d65e26f3579ba4603bdf2ed7648b07877bf383d2d37cde993215419335177->leave($__internal_5a8d65e26f3579ba4603bdf2ed7648b07877bf383d2d37cde993215419335177_prof);

        
        $__internal_a8445e50f8d6b4fbdd1806319e702be7a3a3c0bf135a064da564ccb4c1fbfdf0->leave($__internal_a8445e50f8d6b4fbdd1806319e702be7a3a3c0bf135a064da564ccb4c1fbfdf0_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_55888796290d3689275fbcc91cc07354d22c6fdd1efe1acefefe41292c0844eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55888796290d3689275fbcc91cc07354d22c6fdd1efe1acefefe41292c0844eb->enter($__internal_55888796290d3689275fbcc91cc07354d22c6fdd1efe1acefefe41292c0844eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_92dc34b8c0e01c90ff816390105d5356dab9e288257da5f9311e9c26e2aa4ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92dc34b8c0e01c90ff816390105d5356dab9e288257da5f9311e9c26e2aa4ff2->enter($__internal_92dc34b8c0e01c90ff816390105d5356dab9e288257da5f9311e9c26e2aa4ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_92dc34b8c0e01c90ff816390105d5356dab9e288257da5f9311e9c26e2aa4ff2->leave($__internal_92dc34b8c0e01c90ff816390105d5356dab9e288257da5f9311e9c26e2aa4ff2_prof);

        
        $__internal_55888796290d3689275fbcc91cc07354d22c6fdd1efe1acefefe41292c0844eb->leave($__internal_55888796290d3689275fbcc91cc07354d22c6fdd1efe1acefefe41292c0844eb_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_8799f48ca9f12a2e3c612974e8336efb46f9a9a196017c316b9fd1ba9d49dcb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8799f48ca9f12a2e3c612974e8336efb46f9a9a196017c316b9fd1ba9d49dcb0->enter($__internal_8799f48ca9f12a2e3c612974e8336efb46f9a9a196017c316b9fd1ba9d49dcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_fcb456c1e2cad981345e421bf061328a98ba4f001c3874c82396dd0deff0c565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb456c1e2cad981345e421bf061328a98ba4f001c3874c82396dd0deff0c565->enter($__internal_fcb456c1e2cad981345e421bf061328a98ba4f001c3874c82396dd0deff0c565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_fcb456c1e2cad981345e421bf061328a98ba4f001c3874c82396dd0deff0c565->leave($__internal_fcb456c1e2cad981345e421bf061328a98ba4f001c3874c82396dd0deff0c565_prof);

        
        $__internal_8799f48ca9f12a2e3c612974e8336efb46f9a9a196017c316b9fd1ba9d49dcb0->leave($__internal_8799f48ca9f12a2e3c612974e8336efb46f9a9a196017c316b9fd1ba9d49dcb0_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_884418d01f0f7064db8cb8e019a555014b70946421699c86a16fc8724633ce8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884418d01f0f7064db8cb8e019a555014b70946421699c86a16fc8724633ce8c->enter($__internal_884418d01f0f7064db8cb8e019a555014b70946421699c86a16fc8724633ce8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_efdf2505ec8ad503d4c21a9ca326206f24bada42d0ce73670806c24685af40dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efdf2505ec8ad503d4c21a9ca326206f24bada42d0ce73670806c24685af40dd->enter($__internal_efdf2505ec8ad503d4c21a9ca326206f24bada42d0ce73670806c24685af40dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_efdf2505ec8ad503d4c21a9ca326206f24bada42d0ce73670806c24685af40dd->leave($__internal_efdf2505ec8ad503d4c21a9ca326206f24bada42d0ce73670806c24685af40dd_prof);

        
        $__internal_884418d01f0f7064db8cb8e019a555014b70946421699c86a16fc8724633ce8c->leave($__internal_884418d01f0f7064db8cb8e019a555014b70946421699c86a16fc8724633ce8c_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_43918654645777438d85c9570ccd0b302510d01b4bc3c880be7854e4fdf6678e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43918654645777438d85c9570ccd0b302510d01b4bc3c880be7854e4fdf6678e->enter($__internal_43918654645777438d85c9570ccd0b302510d01b4bc3c880be7854e4fdf6678e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_2d2e2f841b44aa8db037db659401bcd984c8f116596e9e4395d0b4b0bf6ad262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2e2f841b44aa8db037db659401bcd984c8f116596e9e4395d0b4b0bf6ad262->enter($__internal_2d2e2f841b44aa8db037db659401bcd984c8f116596e9e4395d0b4b0bf6ad262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 210
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 211
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 212
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 213
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 219
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 220
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_2d2e2f841b44aa8db037db659401bcd984c8f116596e9e4395d0b4b0bf6ad262->leave($__internal_2d2e2f841b44aa8db037db659401bcd984c8f116596e9e4395d0b4b0bf6ad262_prof);

        
        $__internal_43918654645777438d85c9570ccd0b302510d01b4bc3c880be7854e4fdf6678e->leave($__internal_43918654645777438d85c9570ccd0b302510d01b4bc3c880be7854e4fdf6678e_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ee188e974f270b6f7a8020272877353aa4a58380b5f1f85723675b2066d062a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee188e974f270b6f7a8020272877353aa4a58380b5f1f85723675b2066d062a1->enter($__internal_ee188e974f270b6f7a8020272877353aa4a58380b5f1f85723675b2066d062a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_da4e265779f3609e810db6ef6ad22d098ef4f79be8e33676d0d40bbda1d0b1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4e265779f3609e810db6ef6ad22d098ef4f79be8e33676d0d40bbda1d0b1f2->enter($__internal_da4e265779f3609e810db6ef6ad22d098ef4f79be8e33676d0d40bbda1d0b1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_da4e265779f3609e810db6ef6ad22d098ef4f79be8e33676d0d40bbda1d0b1f2->leave($__internal_da4e265779f3609e810db6ef6ad22d098ef4f79be8e33676d0d40bbda1d0b1f2_prof);

        
        $__internal_ee188e974f270b6f7a8020272877353aa4a58380b5f1f85723675b2066d062a1->leave($__internal_ee188e974f270b6f7a8020272877353aa4a58380b5f1f85723675b2066d062a1_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7ac87710b95f6bb4260f63018d3aece08e70021f74a8dc8df007fd87e27993c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac87710b95f6bb4260f63018d3aece08e70021f74a8dc8df007fd87e27993c6->enter($__internal_7ac87710b95f6bb4260f63018d3aece08e70021f74a8dc8df007fd87e27993c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c66234e51fe32e51e1e56fa2738c7c9bc8da62bf6116e488e6656d892abae11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66234e51fe32e51e1e56fa2738c7c9bc8da62bf6116e488e6656d892abae11a->enter($__internal_c66234e51fe32e51e1e56fa2738c7c9bc8da62bf6116e488e6656d892abae11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_c66234e51fe32e51e1e56fa2738c7c9bc8da62bf6116e488e6656d892abae11a->leave($__internal_c66234e51fe32e51e1e56fa2738c7c9bc8da62bf6116e488e6656d892abae11a_prof);

        
        $__internal_7ac87710b95f6bb4260f63018d3aece08e70021f74a8dc8df007fd87e27993c6->leave($__internal_7ac87710b95f6bb4260f63018d3aece08e70021f74a8dc8df007fd87e27993c6_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_da657ece4ad0dab8f3cc593b94cfc5a07c12ca9ba58a74280d35f7b18d0da011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da657ece4ad0dab8f3cc593b94cfc5a07c12ca9ba58a74280d35f7b18d0da011->enter($__internal_da657ece4ad0dab8f3cc593b94cfc5a07c12ca9ba58a74280d35f7b18d0da011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_12ca268dc5841545644e3ee0b60b9c60e54564dbfbdafe6d9ddf0c0e653069f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ca268dc5841545644e3ee0b60b9c60e54564dbfbdafe6d9ddf0c0e653069f2->enter($__internal_12ca268dc5841545644e3ee0b60b9c60e54564dbfbdafe6d9ddf0c0e653069f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_12ca268dc5841545644e3ee0b60b9c60e54564dbfbdafe6d9ddf0c0e653069f2->leave($__internal_12ca268dc5841545644e3ee0b60b9c60e54564dbfbdafe6d9ddf0c0e653069f2_prof);

        
        $__internal_da657ece4ad0dab8f3cc593b94cfc5a07c12ca9ba58a74280d35f7b18d0da011->leave($__internal_da657ece4ad0dab8f3cc593b94cfc5a07c12ca9ba58a74280d35f7b18d0da011_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_039c6c5e85a2b4081a37a2051df8a1ea3af14f98d3103d908145161326c1131a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_039c6c5e85a2b4081a37a2051df8a1ea3af14f98d3103d908145161326c1131a->enter($__internal_039c6c5e85a2b4081a37a2051df8a1ea3af14f98d3103d908145161326c1131a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_132edd3b9ad1e9fc8baa47d00047e110ab75dc548a7d9b74b6194478bc12009c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132edd3b9ad1e9fc8baa47d00047e110ab75dc548a7d9b74b6194478bc12009c->enter($__internal_132edd3b9ad1e9fc8baa47d00047e110ab75dc548a7d9b74b6194478bc12009c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_132edd3b9ad1e9fc8baa47d00047e110ab75dc548a7d9b74b6194478bc12009c->leave($__internal_132edd3b9ad1e9fc8baa47d00047e110ab75dc548a7d9b74b6194478bc12009c_prof);

        
        $__internal_039c6c5e85a2b4081a37a2051df8a1ea3af14f98d3103d908145161326c1131a->leave($__internal_039c6c5e85a2b4081a37a2051df8a1ea3af14f98d3103d908145161326c1131a_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_66c66609ce2e44a40306015569fdd4b6eb09e6ea849d87d5cef98953dca72056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c66609ce2e44a40306015569fdd4b6eb09e6ea849d87d5cef98953dca72056->enter($__internal_66c66609ce2e44a40306015569fdd4b6eb09e6ea849d87d5cef98953dca72056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_3ccdd80fe18f57a5905835ad60462b3dcf104c00ee491e660d8796e4065f48f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ccdd80fe18f57a5905835ad60462b3dcf104c00ee491e660d8796e4065f48f6->enter($__internal_3ccdd80fe18f57a5905835ad60462b3dcf104c00ee491e660d8796e4065f48f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3ccdd80fe18f57a5905835ad60462b3dcf104c00ee491e660d8796e4065f48f6->leave($__internal_3ccdd80fe18f57a5905835ad60462b3dcf104c00ee491e660d8796e4065f48f6_prof);

        
        $__internal_66c66609ce2e44a40306015569fdd4b6eb09e6ea849d87d5cef98953dca72056->leave($__internal_66c66609ce2e44a40306015569fdd4b6eb09e6ea849d87d5cef98953dca72056_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_6b065b88c68217e567ad6e32380c6248c762ba832b0cd64176767e5fa943e2cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b065b88c68217e567ad6e32380c6248c762ba832b0cd64176767e5fa943e2cb->enter($__internal_6b065b88c68217e567ad6e32380c6248c762ba832b0cd64176767e5fa943e2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_6a6115cdcb5875fceaa38fcbbb168550e9cd2192140aa8fde736f2af2084f72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6115cdcb5875fceaa38fcbbb168550e9cd2192140aa8fde736f2af2084f72d->enter($__internal_6a6115cdcb5875fceaa38fcbbb168550e9cd2192140aa8fde736f2af2084f72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6a6115cdcb5875fceaa38fcbbb168550e9cd2192140aa8fde736f2af2084f72d->leave($__internal_6a6115cdcb5875fceaa38fcbbb168550e9cd2192140aa8fde736f2af2084f72d_prof);

        
        $__internal_6b065b88c68217e567ad6e32380c6248c762ba832b0cd64176767e5fa943e2cb->leave($__internal_6b065b88c68217e567ad6e32380c6248c762ba832b0cd64176767e5fa943e2cb_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6b9a337809acad15008774d70605dee8011e882c332a706ab9395a0ce2e3c808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b9a337809acad15008774d70605dee8011e882c332a706ab9395a0ce2e3c808->enter($__internal_6b9a337809acad15008774d70605dee8011e882c332a706ab9395a0ce2e3c808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_35aa0a848f9e787f7e5d68ab55a8d8be441c33e9d1ad23ab761df1ac8fc5b26c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35aa0a848f9e787f7e5d68ab55a8d8be441c33e9d1ad23ab761df1ac8fc5b26c->enter($__internal_35aa0a848f9e787f7e5d68ab55a8d8be441c33e9d1ad23ab761df1ac8fc5b26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_35aa0a848f9e787f7e5d68ab55a8d8be441c33e9d1ad23ab761df1ac8fc5b26c->leave($__internal_35aa0a848f9e787f7e5d68ab55a8d8be441c33e9d1ad23ab761df1ac8fc5b26c_prof);

        
        $__internal_6b9a337809acad15008774d70605dee8011e882c332a706ab9395a0ce2e3c808->leave($__internal_6b9a337809acad15008774d70605dee8011e882c332a706ab9395a0ce2e3c808_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ea8036c8600c5e0eff49e14b9d054cfbf9bce5ab9e218d05b39ba2ae09c56e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8036c8600c5e0eff49e14b9d054cfbf9bce5ab9e218d05b39ba2ae09c56e9f->enter($__internal_ea8036c8600c5e0eff49e14b9d054cfbf9bce5ab9e218d05b39ba2ae09c56e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_062261c4b3c8092d81a9798799dd6215ae4401304017cc78ca85c3bb3f1db9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062261c4b3c8092d81a9798799dd6215ae4401304017cc78ca85c3bb3f1db9de->enter($__internal_062261c4b3c8092d81a9798799dd6215ae4401304017cc78ca85c3bb3f1db9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_062261c4b3c8092d81a9798799dd6215ae4401304017cc78ca85c3bb3f1db9de->leave($__internal_062261c4b3c8092d81a9798799dd6215ae4401304017cc78ca85c3bb3f1db9de_prof);

        
        $__internal_ea8036c8600c5e0eff49e14b9d054cfbf9bce5ab9e218d05b39ba2ae09c56e9f->leave($__internal_ea8036c8600c5e0eff49e14b9d054cfbf9bce5ab9e218d05b39ba2ae09c56e9f_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0ce70bc59cf02d67bdd4eb31b5c86f19c9dd114c6c97333e898514b2233c2f79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ce70bc59cf02d67bdd4eb31b5c86f19c9dd114c6c97333e898514b2233c2f79->enter($__internal_0ce70bc59cf02d67bdd4eb31b5c86f19c9dd114c6c97333e898514b2233c2f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_e4ed0c60bbd609436ff16a0791bd48760a10b10cd472c67ac48737947d9c1bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ed0c60bbd609436ff16a0791bd48760a10b10cd472c67ac48737947d9c1bdf->enter($__internal_e4ed0c60bbd609436ff16a0791bd48760a10b10cd472c67ac48737947d9c1bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 279
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 282
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "</ul>
    ";
            // line 285
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_e4ed0c60bbd609436ff16a0791bd48760a10b10cd472c67ac48737947d9c1bdf->leave($__internal_e4ed0c60bbd609436ff16a0791bd48760a10b10cd472c67ac48737947d9c1bdf_prof);

        
        $__internal_0ce70bc59cf02d67bdd4eb31b5c86f19c9dd114c6c97333e898514b2233c2f79->leave($__internal_0ce70bc59cf02d67bdd4eb31b5c86f19c9dd114c6c97333e898514b2233c2f79_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1139 => 285,  1136 => 284,  1128 => 282,  1124 => 281,  1122 => 280,  1116 => 279,  1114 => 278,  1105 => 277,  1095 => 272,  1093 => 271,  1091 => 270,  1085 => 269,  1076 => 268,  1066 => 265,  1064 => 264,  1062 => 263,  1056 => 262,  1047 => 261,  1037 => 258,  1035 => 257,  1026 => 256,  1016 => 253,  1014 => 252,  1005 => 251,  995 => 248,  993 => 247,  984 => 246,  974 => 243,  972 => 242,  963 => 241,  953 => 238,  951 => 237,  949 => 236,  940 => 235,  930 => 232,  928 => 231,  926 => 230,  924 => 229,  918 => 228,  909 => 227,  897 => 221,  893 => 220,  878 => 219,  874 => 216,  871 => 213,  870 => 212,  869 => 211,  867 => 210,  864 => 209,  861 => 208,  858 => 207,  855 => 206,  852 => 205,  849 => 204,  846 => 203,  843 => 202,  841 => 201,  832 => 200,  822 => 197,  820 => 195,  811 => 194,  801 => 191,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 277,  200 => 276,  197 => 274,  195 => 268,  192 => 267,  190 => 261,  187 => 260,  185 => 256,  182 => 255,  180 => 251,  177 => 250,  175 => 246,  172 => 245,  170 => 241,  167 => 240,  165 => 235,  162 => 234,  160 => 227,  157 => 226,  154 => 224,  152 => 200,  149 => 199,  147 => 194,  144 => 193,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
