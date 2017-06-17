<?php

/* AIProfileBundle:Profile:add.html.twig */
class __TwigTemplate_ea2144b2d9aeed83a9d7e7a6564c7e9306340860369b48687fc0389850dc29c0 extends Twig_Template
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
        $__internal_8a4bc75db51756a5bbe15a3550323612decc2e1a8d376460fdf1956f01efb2db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a4bc75db51756a5bbe15a3550323612decc2e1a8d376460fdf1956f01efb2db->enter($__internal_8a4bc75db51756a5bbe15a3550323612decc2e1a8d376460fdf1956f01efb2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AIProfileBundle:Profile:add.html.twig"));

        $__internal_dcaeddfa51234e9c356b5e06897233a8ec26be145af43ce5fe4695fc7d7d1d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcaeddfa51234e9c356b5e06897233a8ec26be145af43ce5fe4695fc7d7d1d89->enter($__internal_dcaeddfa51234e9c356b5e06897233a8ec26be145af43ce5fe4695fc7d7d1d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AIProfileBundle:Profile:add.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<title>Anthillinspire développeur Backend Symfony/PHP</title>
<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" 
integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" 
integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

<!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" 
integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</head>
<body>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "    <div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
<h3>Formulaire de renseignement de profile avec versioning<h3>
<div class=\"well\">
  ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 27
        echo "  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

  ";
        // line 30
        echo "  
  ";
        // line 32
        echo "  <div class=\"form-group\">
    ";
        // line 34
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Une appellation"));
        echo "

    ";
        // line 37
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 41
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  
  
  <div class=\"well\">
  ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "versions", array()), 'row');
        echo "
  <a href=\"#\" id=\"add_versions\" class=\"btn btn-default\">Ajouter une version</a>
  </div>
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script type=\"text/javascript\">
  \$(document).ready(function() {
    
    var \$container = \$('div#ai_profilebundle_profile_versions');
    
    var index = \$container.find(':input').length;
    
    \$('#add_versions').click(function(e) {
      addVersions(\$container);
      e.preventDefault(); 
      return false;
    });
    
    if (index == 0) {
      addVersions(\$container);
    } else {
      
      \$container.children('div').each(function() {
        addDeleteLink(\$(this));
      });
    }
    

    function addVersions(\$container) {

     

      var template = \$container.attr('data-prototype')

        .replace(/__name__label__/g, 'Version n°' + (index+1))

        .replace(/__name__/g,        index)

      ;

      

      var \$prototype = \$(template);


      

      addDeleteLink(\$prototype);


      

      \$container.append(\$prototype);


     

      index++;

    }
    

    function addDeleteLink(\$prototype) {

      

      var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');


     

      \$prototype.append(\$deleteLink);


     

      \$deleteLink.click(function(e) {

        \$prototype.remove();

        e.preventDefault(); 

        return false;

      });

    }

  });

</script>
 
  ";
        // line 139
        echo "  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
  ";
        // line 143
        echo "  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

  ";
        // line 146
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
 <footer>
  <p>Posté par: <strong><a href=\"http://anthillinspire.fr/\">Anthillinspire</a></strong></p>
  <p>Contact: boubacar.sow@anthillinspire.fr</p>
</footer> 
</body>
</html>
";
        
        $__internal_8a4bc75db51756a5bbe15a3550323612decc2e1a8d376460fdf1956f01efb2db->leave($__internal_8a4bc75db51756a5bbe15a3550323612decc2e1a8d376460fdf1956f01efb2db_prof);

        
        $__internal_dcaeddfa51234e9c356b5e06897233a8ec26be145af43ce5fe4695fc7d7d1d89->leave($__internal_dcaeddfa51234e9c356b5e06897233a8ec26be145af43ce5fe4695fc7d7d1d89_prof);

    }

    public function getTemplateName()
    {
        return "AIProfileBundle:Profile:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 146,  201 => 143,  196 => 139,  102 => 47,  92 => 41,  85 => 37,  79 => 34,  76 => 32,  73 => 30,  67 => 27,  62 => 24,  57 => 21,  48 => 19,  44 => 18,  25 => 1,);
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
<html>
<head>
<title>Anthillinspire développeur Backend Symfony/PHP</title>
<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" 
integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" 
integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

<!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" 
integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</head>
<body>
{% for message in app.session.flashbag.get('info') %}
    <div class=\"alert alert-info\">Message flash : {{ message }}</div>
  {% endfor %}

<h3>Formulaire de renseignement de profile avec versioning<h3>
<div class=\"well\">
  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

  {# Les erreurs générales du formulaire. #}
  {{ form_errors(form) }}

  {# Génération du label + error + widget pour un champ. #}
  
  {# Génération manuelle et éclatée : #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.name, \"Une appellation\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.name) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>
  
  
  <div class=\"well\">
  {{ form_row(form.versions) }}
  <a href=\"#\" id=\"add_versions\" class=\"btn btn-default\">Ajouter une version</a>
  </div>
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script type=\"text/javascript\">
  \$(document).ready(function() {
    
    var \$container = \$('div#ai_profilebundle_profile_versions');
    
    var index = \$container.find(':input').length;
    
    \$('#add_versions').click(function(e) {
      addVersions(\$container);
      e.preventDefault(); 
      return false;
    });
    
    if (index == 0) {
      addVersions(\$container);
    } else {
      
      \$container.children('div').each(function() {
        addDeleteLink(\$(this));
      });
    }
    

    function addVersions(\$container) {

     

      var template = \$container.attr('data-prototype')

        .replace(/__name__label__/g, 'Version n°' + (index+1))

        .replace(/__name__/g,        index)

      ;

      

      var \$prototype = \$(template);


      

      addDeleteLink(\$prototype);


      

      \$container.append(\$prototype);


     

      index++;

    }
    

    function addDeleteLink(\$prototype) {

      

      var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');


     

      \$prototype.append(\$deleteLink);


     

      \$deleteLink.click(function(e) {

        \$prototype.remove();

        e.preventDefault(); 

        return false;

      });

    }

  });

</script>
 
  {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
  {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}
  {# Génération automatique des champs pas encore écrits.
     Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)
     et tous les champs cachés (type « hidden »). #}
  {{ form_rest(form) }}

  {# Fermeture de la balise <form> du formulaire HTML #}
  {{ form_end(form) }}
</div>
 <footer>
  <p>Posté par: <strong><a href=\"http://anthillinspire.fr/\">Anthillinspire</a></strong></p>
  <p>Contact: boubacar.sow@anthillinspire.fr</p>
</footer> 
</body>
</html>
", "AIProfileBundle:Profile:add.html.twig", "C:\\xampp\\htdocs\\anthill-inspire\\src\\AI\\ProfileBundle/Resources/views/Profile/add.html.twig");
    }
}
