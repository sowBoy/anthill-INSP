<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c70c05b27d37c0edea3d3826acbd9420e04844a6a0d01d5bf50a4dfaff34b6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e93f5ea805de7ffe5fcd72c571fa40d04725ab1a6ec7862be48a918ab525724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e93f5ea805de7ffe5fcd72c571fa40d04725ab1a6ec7862be48a918ab525724->enter($__internal_6e93f5ea805de7ffe5fcd72c571fa40d04725ab1a6ec7862be48a918ab525724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a18560ce7ccb8487aca6ef0af8a95a8110262ac23733e0a8a799dfa25cb2cf19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18560ce7ccb8487aca6ef0af8a95a8110262ac23733e0a8a799dfa25cb2cf19->enter($__internal_a18560ce7ccb8487aca6ef0af8a95a8110262ac23733e0a8a799dfa25cb2cf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e93f5ea805de7ffe5fcd72c571fa40d04725ab1a6ec7862be48a918ab525724->leave($__internal_6e93f5ea805de7ffe5fcd72c571fa40d04725ab1a6ec7862be48a918ab525724_prof);

        
        $__internal_a18560ce7ccb8487aca6ef0af8a95a8110262ac23733e0a8a799dfa25cb2cf19->leave($__internal_a18560ce7ccb8487aca6ef0af8a95a8110262ac23733e0a8a799dfa25cb2cf19_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_455bffacb1e27a9508dbd0a7f31d87b93964cbf070744d0d03ec6580b5b4256f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_455bffacb1e27a9508dbd0a7f31d87b93964cbf070744d0d03ec6580b5b4256f->enter($__internal_455bffacb1e27a9508dbd0a7f31d87b93964cbf070744d0d03ec6580b5b4256f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_303c5d442adcd84690cf77f6db59bc81b787d7ff02423d3d2d1e6220fa25810c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303c5d442adcd84690cf77f6db59bc81b787d7ff02423d3d2d1e6220fa25810c->enter($__internal_303c5d442adcd84690cf77f6db59bc81b787d7ff02423d3d2d1e6220fa25810c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_303c5d442adcd84690cf77f6db59bc81b787d7ff02423d3d2d1e6220fa25810c->leave($__internal_303c5d442adcd84690cf77f6db59bc81b787d7ff02423d3d2d1e6220fa25810c_prof);

        
        $__internal_455bffacb1e27a9508dbd0a7f31d87b93964cbf070744d0d03ec6580b5b4256f->leave($__internal_455bffacb1e27a9508dbd0a7f31d87b93964cbf070744d0d03ec6580b5b4256f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8de729d8a7c2bbe3c9d536cf32f03828c14ec55c6b9722fffff7fc96036ada92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8de729d8a7c2bbe3c9d536cf32f03828c14ec55c6b9722fffff7fc96036ada92->enter($__internal_8de729d8a7c2bbe3c9d536cf32f03828c14ec55c6b9722fffff7fc96036ada92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f77a7e57d76ec2e237b0b7e0ed1cc7f7ffa1367b67c2f236da9e5062276531d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77a7e57d76ec2e237b0b7e0ed1cc7f7ffa1367b67c2f236da9e5062276531d9->enter($__internal_f77a7e57d76ec2e237b0b7e0ed1cc7f7ffa1367b67c2f236da9e5062276531d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f77a7e57d76ec2e237b0b7e0ed1cc7f7ffa1367b67c2f236da9e5062276531d9->leave($__internal_f77a7e57d76ec2e237b0b7e0ed1cc7f7ffa1367b67c2f236da9e5062276531d9_prof);

        
        $__internal_8de729d8a7c2bbe3c9d536cf32f03828c14ec55c6b9722fffff7fc96036ada92->leave($__internal_8de729d8a7c2bbe3c9d536cf32f03828c14ec55c6b9722fffff7fc96036ada92_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_03dcfafa3cac21170c7479da9cda8e83419f337dff12c21195197818764c6086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03dcfafa3cac21170c7479da9cda8e83419f337dff12c21195197818764c6086->enter($__internal_03dcfafa3cac21170c7479da9cda8e83419f337dff12c21195197818764c6086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8a414aaf353bef1e0cf455235def5307f648e8c554ca458e4bf31808686b234d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a414aaf353bef1e0cf455235def5307f648e8c554ca458e4bf31808686b234d->enter($__internal_8a414aaf353bef1e0cf455235def5307f648e8c554ca458e4bf31808686b234d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8a414aaf353bef1e0cf455235def5307f648e8c554ca458e4bf31808686b234d->leave($__internal_8a414aaf353bef1e0cf455235def5307f648e8c554ca458e4bf31808686b234d_prof);

        
        $__internal_03dcfafa3cac21170c7479da9cda8e83419f337dff12c21195197818764c6086->leave($__internal_03dcfafa3cac21170c7479da9cda8e83419f337dff12c21195197818764c6086_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\anthill-inspire\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
