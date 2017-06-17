<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_1c002d725d96ebf8a1592cb429355f3bab9cdac472be22c8d8521f9a6ad459a4 extends Twig_Template
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
        $__internal_7df977507f3f8f05e90ff9a89c9e2cdfdd04a46000d4d725db2a50fb386bc9de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df977507f3f8f05e90ff9a89c9e2cdfdd04a46000d4d725db2a50fb386bc9de->enter($__internal_7df977507f3f8f05e90ff9a89c9e2cdfdd04a46000d4d725db2a50fb386bc9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_abcd713ec9cfe990eb4489c08185778481144d1c51e146aca32d14b0a307c5e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abcd713ec9cfe990eb4489c08185778481144d1c51e146aca32d14b0a307c5e9->enter($__internal_abcd713ec9cfe990eb4489c08185778481144d1c51e146aca32d14b0a307c5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_7df977507f3f8f05e90ff9a89c9e2cdfdd04a46000d4d725db2a50fb386bc9de->leave($__internal_7df977507f3f8f05e90ff9a89c9e2cdfdd04a46000d4d725db2a50fb386bc9de_prof);

        
        $__internal_abcd713ec9cfe990eb4489c08185778481144d1c51e146aca32d14b0a307c5e9->leave($__internal_abcd713ec9cfe990eb4489c08185778481144d1c51e146aca32d14b0a307c5e9_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_a46ceeafb866832a0008c6b446b47981f6afd446f8bc0c379daebf91b40a5dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46ceeafb866832a0008c6b446b47981f6afd446f8bc0c379daebf91b40a5dcf->enter($__internal_a46ceeafb866832a0008c6b446b47981f6afd446f8bc0c379daebf91b40a5dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_dc8ab1399147be0926bfe8cd15c2caed883d6d50cd91962c4aba783692d36b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8ab1399147be0926bfe8cd15c2caed883d6d50cd91962c4aba783692d36b29->enter($__internal_dc8ab1399147be0926bfe8cd15c2caed883d6d50cd91962c4aba783692d36b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_dc8ab1399147be0926bfe8cd15c2caed883d6d50cd91962c4aba783692d36b29->leave($__internal_dc8ab1399147be0926bfe8cd15c2caed883d6d50cd91962c4aba783692d36b29_prof);

        
        $__internal_a46ceeafb866832a0008c6b446b47981f6afd446f8bc0c379daebf91b40a5dcf->leave($__internal_a46ceeafb866832a0008c6b446b47981f6afd446f8bc0c379daebf91b40a5dcf_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ebf64322a130a5a1257d34cc78aad19a5e4dc6062ddfdc2b7a110c5908b5037c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebf64322a130a5a1257d34cc78aad19a5e4dc6062ddfdc2b7a110c5908b5037c->enter($__internal_ebf64322a130a5a1257d34cc78aad19a5e4dc6062ddfdc2b7a110c5908b5037c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_7b09697ebb60b7205404247061c0a8c64c19aee653700290e8c6b3902f7b29f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b09697ebb60b7205404247061c0a8c64c19aee653700290e8c6b3902f7b29f1->enter($__internal_7b09697ebb60b7205404247061c0a8c64c19aee653700290e8c6b3902f7b29f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_7b09697ebb60b7205404247061c0a8c64c19aee653700290e8c6b3902f7b29f1->leave($__internal_7b09697ebb60b7205404247061c0a8c64c19aee653700290e8c6b3902f7b29f1_prof);

        
        $__internal_ebf64322a130a5a1257d34cc78aad19a5e4dc6062ddfdc2b7a110c5908b5037c->leave($__internal_ebf64322a130a5a1257d34cc78aad19a5e4dc6062ddfdc2b7a110c5908b5037c_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_cbe7436a2bb7a9489e23bff848571b4941aee8e7c9ac1237739586d4d5d5f3a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe7436a2bb7a9489e23bff848571b4941aee8e7c9ac1237739586d4d5d5f3a5->enter($__internal_cbe7436a2bb7a9489e23bff848571b4941aee8e7c9ac1237739586d4d5d5f3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_434274bcc125e092369aba2115306a6f9d4c09f7454efe9eb59283cc8cd50e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434274bcc125e092369aba2115306a6f9d4c09f7454efe9eb59283cc8cd50e01->enter($__internal_434274bcc125e092369aba2115306a6f9d4c09f7454efe9eb59283cc8cd50e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_434274bcc125e092369aba2115306a6f9d4c09f7454efe9eb59283cc8cd50e01->leave($__internal_434274bcc125e092369aba2115306a6f9d4c09f7454efe9eb59283cc8cd50e01_prof);

        
        $__internal_cbe7436a2bb7a9489e23bff848571b4941aee8e7c9ac1237739586d4d5d5f3a5->leave($__internal_cbe7436a2bb7a9489e23bff848571b4941aee8e7c9ac1237739586d4d5d5f3a5_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_192579894e50281ab9ae4be1a30202136bc203e92b1bc80f74986704684532f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192579894e50281ab9ae4be1a30202136bc203e92b1bc80f74986704684532f6->enter($__internal_192579894e50281ab9ae4be1a30202136bc203e92b1bc80f74986704684532f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_6bb2e5af74bb6b9e44c3ec1f38739765d7ef56cf12a73777271b343a7cf7f84a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb2e5af74bb6b9e44c3ec1f38739765d7ef56cf12a73777271b343a7cf7f84a->enter($__internal_6bb2e5af74bb6b9e44c3ec1f38739765d7ef56cf12a73777271b343a7cf7f84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_816099b3e3da3bd17e1c1021c96b660fff1f21c392045803f9ceacca8608495d = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_18b2cda76f278644d42bdcbeddb47bda9df8ca64f9b056323e047b37393fa0ed = "{{") && ('' === $__internal_18b2cda76f278644d42bdcbeddb47bda9df8ca64f9b056323e047b37393fa0ed || 0 === strpos($__internal_816099b3e3da3bd17e1c1021c96b660fff1f21c392045803f9ceacca8608495d, $__internal_18b2cda76f278644d42bdcbeddb47bda9df8ca64f9b056323e047b37393fa0ed)));
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
        
        $__internal_6bb2e5af74bb6b9e44c3ec1f38739765d7ef56cf12a73777271b343a7cf7f84a->leave($__internal_6bb2e5af74bb6b9e44c3ec1f38739765d7ef56cf12a73777271b343a7cf7f84a_prof);

        
        $__internal_192579894e50281ab9ae4be1a30202136bc203e92b1bc80f74986704684532f6->leave($__internal_192579894e50281ab9ae4be1a30202136bc203e92b1bc80f74986704684532f6_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_1ca57fcd91b57fd6291e7dd4f18d8c3e39a933deb0fc106ef513a07658172713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca57fcd91b57fd6291e7dd4f18d8c3e39a933deb0fc106ef513a07658172713->enter($__internal_1ca57fcd91b57fd6291e7dd4f18d8c3e39a933deb0fc106ef513a07658172713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_97b0eddf0d72829aec80fa9f97ccd3abb4f97873dbb45f2e127bf52a75769f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b0eddf0d72829aec80fa9f97ccd3abb4f97873dbb45f2e127bf52a75769f3e->enter($__internal_97b0eddf0d72829aec80fa9f97ccd3abb4f97873dbb45f2e127bf52a75769f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_97b0eddf0d72829aec80fa9f97ccd3abb4f97873dbb45f2e127bf52a75769f3e->leave($__internal_97b0eddf0d72829aec80fa9f97ccd3abb4f97873dbb45f2e127bf52a75769f3e_prof);

        
        $__internal_1ca57fcd91b57fd6291e7dd4f18d8c3e39a933deb0fc106ef513a07658172713->leave($__internal_1ca57fcd91b57fd6291e7dd4f18d8c3e39a933deb0fc106ef513a07658172713_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_74d67fbe50de0d7416a5fa2ddd357a004bac0fd604f9d5913251a882768bafbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d67fbe50de0d7416a5fa2ddd357a004bac0fd604f9d5913251a882768bafbc->enter($__internal_74d67fbe50de0d7416a5fa2ddd357a004bac0fd604f9d5913251a882768bafbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_1b971b5734f5c65fd2437291e56f74613f68da81295340c7b2bbb889c0b1dc5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b971b5734f5c65fd2437291e56f74613f68da81295340c7b2bbb889c0b1dc5d->enter($__internal_1b971b5734f5c65fd2437291e56f74613f68da81295340c7b2bbb889c0b1dc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_1b971b5734f5c65fd2437291e56f74613f68da81295340c7b2bbb889c0b1dc5d->leave($__internal_1b971b5734f5c65fd2437291e56f74613f68da81295340c7b2bbb889c0b1dc5d_prof);

        
        $__internal_74d67fbe50de0d7416a5fa2ddd357a004bac0fd604f9d5913251a882768bafbc->leave($__internal_74d67fbe50de0d7416a5fa2ddd357a004bac0fd604f9d5913251a882768bafbc_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_090db71de80af5ba00b901f8b5fc137fa18fd1b3117ab3cd27e0dc62e88659df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090db71de80af5ba00b901f8b5fc137fa18fd1b3117ab3cd27e0dc62e88659df->enter($__internal_090db71de80af5ba00b901f8b5fc137fa18fd1b3117ab3cd27e0dc62e88659df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_3f570c95682f3953f9872239356fbfd8d768b7c583f1e2396e4c25725da6819b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f570c95682f3953f9872239356fbfd8d768b7c583f1e2396e4c25725da6819b->enter($__internal_3f570c95682f3953f9872239356fbfd8d768b7c583f1e2396e4c25725da6819b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_3f570c95682f3953f9872239356fbfd8d768b7c583f1e2396e4c25725da6819b->leave($__internal_3f570c95682f3953f9872239356fbfd8d768b7c583f1e2396e4c25725da6819b_prof);

        
        $__internal_090db71de80af5ba00b901f8b5fc137fa18fd1b3117ab3cd27e0dc62e88659df->leave($__internal_090db71de80af5ba00b901f8b5fc137fa18fd1b3117ab3cd27e0dc62e88659df_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_5fc4087e6dd50a427e461ac7bef2cf6126c0f90ec4128c10be0ef68392190f18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc4087e6dd50a427e461ac7bef2cf6126c0f90ec4128c10be0ef68392190f18->enter($__internal_5fc4087e6dd50a427e461ac7bef2cf6126c0f90ec4128c10be0ef68392190f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_c719d6307d7a67d367724278330c2982e41b304473b9fddbeb77ad110f019c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c719d6307d7a67d367724278330c2982e41b304473b9fddbeb77ad110f019c45->enter($__internal_c719d6307d7a67d367724278330c2982e41b304473b9fddbeb77ad110f019c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_c719d6307d7a67d367724278330c2982e41b304473b9fddbeb77ad110f019c45->leave($__internal_c719d6307d7a67d367724278330c2982e41b304473b9fddbeb77ad110f019c45_prof);

        
        $__internal_5fc4087e6dd50a427e461ac7bef2cf6126c0f90ec4128c10be0ef68392190f18->leave($__internal_5fc4087e6dd50a427e461ac7bef2cf6126c0f90ec4128c10be0ef68392190f18_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_ed302e2a1b3a9a1806262d54973f439ca3db266334a6e554b28f9ae1839b5a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed302e2a1b3a9a1806262d54973f439ca3db266334a6e554b28f9ae1839b5a43->enter($__internal_ed302e2a1b3a9a1806262d54973f439ca3db266334a6e554b28f9ae1839b5a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_1a9606008d719071d556c1596d85d4bdc97c6b363815afcdfb9e98430c5fe56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9606008d719071d556c1596d85d4bdc97c6b363815afcdfb9e98430c5fe56c->enter($__internal_1a9606008d719071d556c1596d85d4bdc97c6b363815afcdfb9e98430c5fe56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_1a9606008d719071d556c1596d85d4bdc97c6b363815afcdfb9e98430c5fe56c->leave($__internal_1a9606008d719071d556c1596d85d4bdc97c6b363815afcdfb9e98430c5fe56c_prof);

        
        $__internal_ed302e2a1b3a9a1806262d54973f439ca3db266334a6e554b28f9ae1839b5a43->leave($__internal_ed302e2a1b3a9a1806262d54973f439ca3db266334a6e554b28f9ae1839b5a43_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_4bcf89137c1a602b5033b55e6a14423428dfb3e9c5d86829d34201fdf043b950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bcf89137c1a602b5033b55e6a14423428dfb3e9c5d86829d34201fdf043b950->enter($__internal_4bcf89137c1a602b5033b55e6a14423428dfb3e9c5d86829d34201fdf043b950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_1062368c773094967e12b96025d47ebdf0ecdf41571710e0d328cc24ded6cc2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1062368c773094967e12b96025d47ebdf0ecdf41571710e0d328cc24ded6cc2e->enter($__internal_1062368c773094967e12b96025d47ebdf0ecdf41571710e0d328cc24ded6cc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_1062368c773094967e12b96025d47ebdf0ecdf41571710e0d328cc24ded6cc2e->leave($__internal_1062368c773094967e12b96025d47ebdf0ecdf41571710e0d328cc24ded6cc2e_prof);

        
        $__internal_4bcf89137c1a602b5033b55e6a14423428dfb3e9c5d86829d34201fdf043b950->leave($__internal_4bcf89137c1a602b5033b55e6a14423428dfb3e9c5d86829d34201fdf043b950_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_c0f9c9bffb284357f8d2d93639021c37e5ec4b346adfff2de645921a01c920a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f9c9bffb284357f8d2d93639021c37e5ec4b346adfff2de645921a01c920a5->enter($__internal_c0f9c9bffb284357f8d2d93639021c37e5ec4b346adfff2de645921a01c920a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_8705f6f44efb4ca910dacfe52965a2b8ab947adf5280b4d10dec283116bbaba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8705f6f44efb4ca910dacfe52965a2b8ab947adf5280b4d10dec283116bbaba1->enter($__internal_8705f6f44efb4ca910dacfe52965a2b8ab947adf5280b4d10dec283116bbaba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_8705f6f44efb4ca910dacfe52965a2b8ab947adf5280b4d10dec283116bbaba1->leave($__internal_8705f6f44efb4ca910dacfe52965a2b8ab947adf5280b4d10dec283116bbaba1_prof);

        
        $__internal_c0f9c9bffb284357f8d2d93639021c37e5ec4b346adfff2de645921a01c920a5->leave($__internal_c0f9c9bffb284357f8d2d93639021c37e5ec4b346adfff2de645921a01c920a5_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a8f59344548fb56f2d54eaaeb9c45270b7dc8211a044a1de0ea34b63a22122b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f59344548fb56f2d54eaaeb9c45270b7dc8211a044a1de0ea34b63a22122b0->enter($__internal_a8f59344548fb56f2d54eaaeb9c45270b7dc8211a044a1de0ea34b63a22122b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_a1d5ea341777c5ae4d3a63ee11a9b8f8a01a03b4d3bddd506ec3f7e0203d00ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d5ea341777c5ae4d3a63ee11a9b8f8a01a03b4d3bddd506ec3f7e0203d00ab->enter($__internal_a1d5ea341777c5ae4d3a63ee11a9b8f8a01a03b4d3bddd506ec3f7e0203d00ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_a1d5ea341777c5ae4d3a63ee11a9b8f8a01a03b4d3bddd506ec3f7e0203d00ab->leave($__internal_a1d5ea341777c5ae4d3a63ee11a9b8f8a01a03b4d3bddd506ec3f7e0203d00ab_prof);

        
        $__internal_a8f59344548fb56f2d54eaaeb9c45270b7dc8211a044a1de0ea34b63a22122b0->leave($__internal_a8f59344548fb56f2d54eaaeb9c45270b7dc8211a044a1de0ea34b63a22122b0_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_4a204a357512ed182648431233371c9bb248f4379359aa9dcaf0ae66812d5f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a204a357512ed182648431233371c9bb248f4379359aa9dcaf0ae66812d5f11->enter($__internal_4a204a357512ed182648431233371c9bb248f4379359aa9dcaf0ae66812d5f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_d910018999712cf7dd210847b3f5f83017422d2b51efb6f85a6873389054a2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d910018999712cf7dd210847b3f5f83017422d2b51efb6f85a6873389054a2b2->enter($__internal_d910018999712cf7dd210847b3f5f83017422d2b51efb6f85a6873389054a2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_d910018999712cf7dd210847b3f5f83017422d2b51efb6f85a6873389054a2b2->leave($__internal_d910018999712cf7dd210847b3f5f83017422d2b51efb6f85a6873389054a2b2_prof);

        
        $__internal_4a204a357512ed182648431233371c9bb248f4379359aa9dcaf0ae66812d5f11->leave($__internal_4a204a357512ed182648431233371c9bb248f4379359aa9dcaf0ae66812d5f11_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e2badc54904bb665658aad80f7f6ee07340c7e1af5b50c637014cc1f93191c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2badc54904bb665658aad80f7f6ee07340c7e1af5b50c637014cc1f93191c80->enter($__internal_e2badc54904bb665658aad80f7f6ee07340c7e1af5b50c637014cc1f93191c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_dc07e2b9a4fdf613e0a34c332eaeeac368fcf62ce808b03f4654ad60b1555870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc07e2b9a4fdf613e0a34c332eaeeac368fcf62ce808b03f4654ad60b1555870->enter($__internal_dc07e2b9a4fdf613e0a34c332eaeeac368fcf62ce808b03f4654ad60b1555870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_dc07e2b9a4fdf613e0a34c332eaeeac368fcf62ce808b03f4654ad60b1555870->leave($__internal_dc07e2b9a4fdf613e0a34c332eaeeac368fcf62ce808b03f4654ad60b1555870_prof);

        
        $__internal_e2badc54904bb665658aad80f7f6ee07340c7e1af5b50c637014cc1f93191c80->leave($__internal_e2badc54904bb665658aad80f7f6ee07340c7e1af5b50c637014cc1f93191c80_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_e299fdc33ad1d9619fb9c1264b3bc9efdb1a3e0aa14b5d030c9f367cf2796194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e299fdc33ad1d9619fb9c1264b3bc9efdb1a3e0aa14b5d030c9f367cf2796194->enter($__internal_e299fdc33ad1d9619fb9c1264b3bc9efdb1a3e0aa14b5d030c9f367cf2796194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_65ea9623d0cbc76e403310fff2def2eadb74d30e465f0b948b9a7400cdfbfff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ea9623d0cbc76e403310fff2def2eadb74d30e465f0b948b9a7400cdfbfff3->enter($__internal_65ea9623d0cbc76e403310fff2def2eadb74d30e465f0b948b9a7400cdfbfff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_65ea9623d0cbc76e403310fff2def2eadb74d30e465f0b948b9a7400cdfbfff3->leave($__internal_65ea9623d0cbc76e403310fff2def2eadb74d30e465f0b948b9a7400cdfbfff3_prof);

        
        $__internal_e299fdc33ad1d9619fb9c1264b3bc9efdb1a3e0aa14b5d030c9f367cf2796194->leave($__internal_e299fdc33ad1d9619fb9c1264b3bc9efdb1a3e0aa14b5d030c9f367cf2796194_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a159ee3b483f9ba7c87d2c7b67338e0ab120a457719d88197ed5602ad00e50be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a159ee3b483f9ba7c87d2c7b67338e0ab120a457719d88197ed5602ad00e50be->enter($__internal_a159ee3b483f9ba7c87d2c7b67338e0ab120a457719d88197ed5602ad00e50be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_df11fda83b1a20ff0fd761ccf71783c8a8b6763e0e876574a74be3edcacb184f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df11fda83b1a20ff0fd761ccf71783c8a8b6763e0e876574a74be3edcacb184f->enter($__internal_df11fda83b1a20ff0fd761ccf71783c8a8b6763e0e876574a74be3edcacb184f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_df11fda83b1a20ff0fd761ccf71783c8a8b6763e0e876574a74be3edcacb184f->leave($__internal_df11fda83b1a20ff0fd761ccf71783c8a8b6763e0e876574a74be3edcacb184f_prof);

        
        $__internal_a159ee3b483f9ba7c87d2c7b67338e0ab120a457719d88197ed5602ad00e50be->leave($__internal_a159ee3b483f9ba7c87d2c7b67338e0ab120a457719d88197ed5602ad00e50be_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_f2720dffdf823d8f24dc510b996509d88bfd6fcc594c808dbf02e45ef2195e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2720dffdf823d8f24dc510b996509d88bfd6fcc594c808dbf02e45ef2195e56->enter($__internal_f2720dffdf823d8f24dc510b996509d88bfd6fcc594c808dbf02e45ef2195e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_e5aca6a1b8c0be153d683eb919df0ab1f510d1534eddbfc034a2e30370449597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5aca6a1b8c0be153d683eb919df0ab1f510d1534eddbfc034a2e30370449597->enter($__internal_e5aca6a1b8c0be153d683eb919df0ab1f510d1534eddbfc034a2e30370449597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e5aca6a1b8c0be153d683eb919df0ab1f510d1534eddbfc034a2e30370449597->leave($__internal_e5aca6a1b8c0be153d683eb919df0ab1f510d1534eddbfc034a2e30370449597_prof);

        
        $__internal_f2720dffdf823d8f24dc510b996509d88bfd6fcc594c808dbf02e45ef2195e56->leave($__internal_f2720dffdf823d8f24dc510b996509d88bfd6fcc594c808dbf02e45ef2195e56_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_a4eb62f0d3c41e01795a7a6448387bac111ccdddda063efe4e582eaaf2602ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4eb62f0d3c41e01795a7a6448387bac111ccdddda063efe4e582eaaf2602ffe->enter($__internal_a4eb62f0d3c41e01795a7a6448387bac111ccdddda063efe4e582eaaf2602ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_b30e9c6117efd2a05ff86cb8b0f50178bdc962ea08cd2092f4a6cecf9569965b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30e9c6117efd2a05ff86cb8b0f50178bdc962ea08cd2092f4a6cecf9569965b->enter($__internal_b30e9c6117efd2a05ff86cb8b0f50178bdc962ea08cd2092f4a6cecf9569965b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 209
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 215
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
            // line 216
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_b30e9c6117efd2a05ff86cb8b0f50178bdc962ea08cd2092f4a6cecf9569965b->leave($__internal_b30e9c6117efd2a05ff86cb8b0f50178bdc962ea08cd2092f4a6cecf9569965b_prof);

        
        $__internal_a4eb62f0d3c41e01795a7a6448387bac111ccdddda063efe4e582eaaf2602ffe->leave($__internal_a4eb62f0d3c41e01795a7a6448387bac111ccdddda063efe4e582eaaf2602ffe_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_62e5697bbbedb10785da3b60666b1d8421edfe3b1b244df7374bbbaf390e6b13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e5697bbbedb10785da3b60666b1d8421edfe3b1b244df7374bbbaf390e6b13->enter($__internal_62e5697bbbedb10785da3b60666b1d8421edfe3b1b244df7374bbbaf390e6b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4cb111432e1467ec4d91b4d03683b9b607de15620a871ce9459c5a27551aee83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb111432e1467ec4d91b4d03683b9b607de15620a871ce9459c5a27551aee83->enter($__internal_4cb111432e1467ec4d91b4d03683b9b607de15620a871ce9459c5a27551aee83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_4cb111432e1467ec4d91b4d03683b9b607de15620a871ce9459c5a27551aee83->leave($__internal_4cb111432e1467ec4d91b4d03683b9b607de15620a871ce9459c5a27551aee83_prof);

        
        $__internal_62e5697bbbedb10785da3b60666b1d8421edfe3b1b244df7374bbbaf390e6b13->leave($__internal_62e5697bbbedb10785da3b60666b1d8421edfe3b1b244df7374bbbaf390e6b13_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_abc7217aaa418df3cf57d71fe1e9c46b2b32233ede233e82fb54ea88fefce05b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abc7217aaa418df3cf57d71fe1e9c46b2b32233ede233e82fb54ea88fefce05b->enter($__internal_abc7217aaa418df3cf57d71fe1e9c46b2b32233ede233e82fb54ea88fefce05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_70e6c91b072650625f53e0ba2babd2da25e5137676799be5a49be7cda97712d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e6c91b072650625f53e0ba2babd2da25e5137676799be5a49be7cda97712d3->enter($__internal_70e6c91b072650625f53e0ba2babd2da25e5137676799be5a49be7cda97712d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_70e6c91b072650625f53e0ba2babd2da25e5137676799be5a49be7cda97712d3->leave($__internal_70e6c91b072650625f53e0ba2babd2da25e5137676799be5a49be7cda97712d3_prof);

        
        $__internal_abc7217aaa418df3cf57d71fe1e9c46b2b32233ede233e82fb54ea88fefce05b->leave($__internal_abc7217aaa418df3cf57d71fe1e9c46b2b32233ede233e82fb54ea88fefce05b_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_e8f1382ef35e8aeb1e458f49666ca7cbfebd0f6879b4903624f3fbae55dadd84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8f1382ef35e8aeb1e458f49666ca7cbfebd0f6879b4903624f3fbae55dadd84->enter($__internal_e8f1382ef35e8aeb1e458f49666ca7cbfebd0f6879b4903624f3fbae55dadd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_5362d7bd3a34ddbab0e217cb63e5d444ad714f3d6f4614e2c24380669bb3c079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5362d7bd3a34ddbab0e217cb63e5d444ad714f3d6f4614e2c24380669bb3c079->enter($__internal_5362d7bd3a34ddbab0e217cb63e5d444ad714f3d6f4614e2c24380669bb3c079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5362d7bd3a34ddbab0e217cb63e5d444ad714f3d6f4614e2c24380669bb3c079->leave($__internal_5362d7bd3a34ddbab0e217cb63e5d444ad714f3d6f4614e2c24380669bb3c079_prof);

        
        $__internal_e8f1382ef35e8aeb1e458f49666ca7cbfebd0f6879b4903624f3fbae55dadd84->leave($__internal_e8f1382ef35e8aeb1e458f49666ca7cbfebd0f6879b4903624f3fbae55dadd84_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_c1cf336e98fd1aa8ff81ee206e1f12ceadd3b83dde350dadc5bc090e414212ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1cf336e98fd1aa8ff81ee206e1f12ceadd3b83dde350dadc5bc090e414212ed->enter($__internal_c1cf336e98fd1aa8ff81ee206e1f12ceadd3b83dde350dadc5bc090e414212ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_1acfe4cf127f204ea53847aeb84fe6ea5d1f27d7b1ced01364aa10c607d48cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acfe4cf127f204ea53847aeb84fe6ea5d1f27d7b1ced01364aa10c607d48cb5->enter($__internal_1acfe4cf127f204ea53847aeb84fe6ea5d1f27d7b1ced01364aa10c607d48cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1acfe4cf127f204ea53847aeb84fe6ea5d1f27d7b1ced01364aa10c607d48cb5->leave($__internal_1acfe4cf127f204ea53847aeb84fe6ea5d1f27d7b1ced01364aa10c607d48cb5_prof);

        
        $__internal_c1cf336e98fd1aa8ff81ee206e1f12ceadd3b83dde350dadc5bc090e414212ed->leave($__internal_c1cf336e98fd1aa8ff81ee206e1f12ceadd3b83dde350dadc5bc090e414212ed_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_637151465651db44ce8804b913c9888eb731e53e1676d576d7e1dd44f8379428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_637151465651db44ce8804b913c9888eb731e53e1676d576d7e1dd44f8379428->enter($__internal_637151465651db44ce8804b913c9888eb731e53e1676d576d7e1dd44f8379428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_8e524f2fd0d256f825b8dea117df405b1b70257c0172c0f25403b74c52d59a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e524f2fd0d256f825b8dea117df405b1b70257c0172c0f25403b74c52d59a74->enter($__internal_8e524f2fd0d256f825b8dea117df405b1b70257c0172c0f25403b74c52d59a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8e524f2fd0d256f825b8dea117df405b1b70257c0172c0f25403b74c52d59a74->leave($__internal_8e524f2fd0d256f825b8dea117df405b1b70257c0172c0f25403b74c52d59a74_prof);

        
        $__internal_637151465651db44ce8804b913c9888eb731e53e1676d576d7e1dd44f8379428->leave($__internal_637151465651db44ce8804b913c9888eb731e53e1676d576d7e1dd44f8379428_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_2d303cc3b90c50b4923e63cef367cb0f9dd34e6d37680845a1c7e2325e3782ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d303cc3b90c50b4923e63cef367cb0f9dd34e6d37680845a1c7e2325e3782ee->enter($__internal_2d303cc3b90c50b4923e63cef367cb0f9dd34e6d37680845a1c7e2325e3782ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_8cd0e415612d587d4a012a7e9d9e258d192a67aa041941f3e8377d2036055069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd0e415612d587d4a012a7e9d9e258d192a67aa041941f3e8377d2036055069->enter($__internal_8cd0e415612d587d4a012a7e9d9e258d192a67aa041941f3e8377d2036055069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8cd0e415612d587d4a012a7e9d9e258d192a67aa041941f3e8377d2036055069->leave($__internal_8cd0e415612d587d4a012a7e9d9e258d192a67aa041941f3e8377d2036055069_prof);

        
        $__internal_2d303cc3b90c50b4923e63cef367cb0f9dd34e6d37680845a1c7e2325e3782ee->leave($__internal_2d303cc3b90c50b4923e63cef367cb0f9dd34e6d37680845a1c7e2325e3782ee_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_99c95dcc572406adfda7640bfa6aee707e185c46971ad82f959df0ca19736f4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c95dcc572406adfda7640bfa6aee707e185c46971ad82f959df0ca19736f4f->enter($__internal_99c95dcc572406adfda7640bfa6aee707e185c46971ad82f959df0ca19736f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3b6e8970e677acfa7f5d8e1b43b3e7406f19861130271190f00e51decdaee31d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6e8970e677acfa7f5d8e1b43b3e7406f19861130271190f00e51decdaee31d->enter($__internal_3b6e8970e677acfa7f5d8e1b43b3e7406f19861130271190f00e51decdaee31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_3b6e8970e677acfa7f5d8e1b43b3e7406f19861130271190f00e51decdaee31d->leave($__internal_3b6e8970e677acfa7f5d8e1b43b3e7406f19861130271190f00e51decdaee31d_prof);

        
        $__internal_99c95dcc572406adfda7640bfa6aee707e185c46971ad82f959df0ca19736f4f->leave($__internal_99c95dcc572406adfda7640bfa6aee707e185c46971ad82f959df0ca19736f4f_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_3fbf33b76787c96b1da5940bf7c562515cb076a4dcfd0631b33c9bf8ce6b58d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fbf33b76787c96b1da5940bf7c562515cb076a4dcfd0631b33c9bf8ce6b58d1->enter($__internal_3fbf33b76787c96b1da5940bf7c562515cb076a4dcfd0631b33c9bf8ce6b58d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_ed54582c022dd1b978566d7108c6e5eeab559e442be755ffefe0c54f78ff7590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed54582c022dd1b978566d7108c6e5eeab559e442be755ffefe0c54f78ff7590->enter($__internal_ed54582c022dd1b978566d7108c6e5eeab559e442be755ffefe0c54f78ff7590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_ed54582c022dd1b978566d7108c6e5eeab559e442be755ffefe0c54f78ff7590->leave($__internal_ed54582c022dd1b978566d7108c6e5eeab559e442be755ffefe0c54f78ff7590_prof);

        
        $__internal_3fbf33b76787c96b1da5940bf7c562515cb076a4dcfd0631b33c9bf8ce6b58d1->leave($__internal_3fbf33b76787c96b1da5940bf7c562515cb076a4dcfd0631b33c9bf8ce6b58d1_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a16109e70fe9f2497a4548e367f71b97671827c734c3b2c00fce3cf40ebf3cf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a16109e70fe9f2497a4548e367f71b97671827c734c3b2c00fce3cf40ebf3cf4->enter($__internal_a16109e70fe9f2497a4548e367f71b97671827c734c3b2c00fce3cf40ebf3cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_3f94b14767b96bc59178c465bcfab091b9fa21b5651741b95a76d3f7294ff208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f94b14767b96bc59178c465bcfab091b9fa21b5651741b95a76d3f7294ff208->enter($__internal_3f94b14767b96bc59178c465bcfab091b9fa21b5651741b95a76d3f7294ff208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_3f94b14767b96bc59178c465bcfab091b9fa21b5651741b95a76d3f7294ff208->leave($__internal_3f94b14767b96bc59178c465bcfab091b9fa21b5651741b95a76d3f7294ff208_prof);

        
        $__internal_a16109e70fe9f2497a4548e367f71b97671827c734c3b2c00fce3cf40ebf3cf4->leave($__internal_a16109e70fe9f2497a4548e367f71b97671827c734c3b2c00fce3cf40ebf3cf4_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
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
", "bootstrap_3_layout.html.twig", "C:\\xampp\\htdocs\\anthill-inspire\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
