<?php

/* @HamsterHub/Base/index.html.twig */
class __TwigTemplate_f0d96cd7955a855500bb55cb0af8bb90f37be8245f5a52e698d031fc82032a71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'h1' => array($this, 'block_h1'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_189bc6b6924088c0a82cedf9bfe52d63c7b9f157237c3eed0c215e7ad9ddaf78 = $this->env->getExtension("native_profiler");
        $__internal_189bc6b6924088c0a82cedf9bfe52d63c7b9f157237c3eed0c215e7ad9ddaf78->enter($__internal_189bc6b6924088c0a82cedf9bfe52d63c7b9f157237c3eed0c215e7ad9ddaf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Base/index.html.twig"));

        // line 1
        $this->loadTemplate("HamsterHubBundle:Base:head.html.twig", "@HamsterHub/Base/index.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("HamsterHubBundle:Base:menu.html.twig", "@HamsterHub/Base/index.html.twig", 2)->display($context);
        // line 3
        echo "
<body>
  <h1>";
        // line 5
        $this->displayBlock('h1', $context, $blocks);
        echo "</h1>
  <div class=\"container\">
    ";
        // line 7
        $this->displayBlock('container', $context, $blocks);
        // line 10
        echo "  </div>
</body>
";
        // line 12
        $this->loadTemplate("HamsterHubBundle:Base:footer.html.twig", "@HamsterHub/Base/index.html.twig", 12)->display($context);
        
        $__internal_189bc6b6924088c0a82cedf9bfe52d63c7b9f157237c3eed0c215e7ad9ddaf78->leave($__internal_189bc6b6924088c0a82cedf9bfe52d63c7b9f157237c3eed0c215e7ad9ddaf78_prof);

    }

    // line 5
    public function block_h1($context, array $blocks = array())
    {
        $__internal_13fc7680f9ac160cbe6096567c4d10f381e54c184ac9e293ac3414ba61784083 = $this->env->getExtension("native_profiler");
        $__internal_13fc7680f9ac160cbe6096567c4d10f381e54c184ac9e293ac3414ba61784083->enter($__internal_13fc7680f9ac160cbe6096567c4d10f381e54c184ac9e293ac3414ba61784083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h1"));

        echo "Accueil";
        
        $__internal_13fc7680f9ac160cbe6096567c4d10f381e54c184ac9e293ac3414ba61784083->leave($__internal_13fc7680f9ac160cbe6096567c4d10f381e54c184ac9e293ac3414ba61784083_prof);

    }

    // line 7
    public function block_container($context, array $blocks = array())
    {
        $__internal_de773c03f6c23972efc1cbba2295275428502acd5dbe1bd11adc3367de87f8eb = $this->env->getExtension("native_profiler");
        $__internal_de773c03f6c23972efc1cbba2295275428502acd5dbe1bd11adc3367de87f8eb->enter($__internal_de773c03f6c23972efc1cbba2295275428502acd5dbe1bd11adc3367de87f8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 8
        echo "      <span>Texte par défaut</span>
    ";
        
        $__internal_de773c03f6c23972efc1cbba2295275428502acd5dbe1bd11adc3367de87f8eb->leave($__internal_de773c03f6c23972efc1cbba2295275428502acd5dbe1bd11adc3367de87f8eb_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Base/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 8,  62 => 7,  50 => 5,  43 => 12,  39 => 10,  37 => 7,  32 => 5,  28 => 3,  26 => 2,  24 => 1,);
    }
}
/* {% include 'HamsterHubBundle:Base:head.html.twig' %}*/
/* {% include 'HamsterHubBundle:Base:menu.html.twig' %}*/
/* */
/* <body>*/
/*   <h1>{% block h1 %}Accueil{% endblock %}</h1>*/
/*   <div class="container">*/
/*     {% block container %}*/
/*       <span>Texte par défaut</span>*/
/*     {% endblock %}*/
/*   </div>*/
/* </body>*/
/* {% include 'HamsterHubBundle:Base:footer.html.twig' %}*/
/* */
