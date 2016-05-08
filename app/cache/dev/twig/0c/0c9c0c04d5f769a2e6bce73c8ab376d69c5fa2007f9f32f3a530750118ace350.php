<?php

/* @HamsterHub/Base/index.html.twig */
class __TwigTemplate_f0d96cd7955a855500bb55cb0af8bb90f37be8245f5a52e698d031fc82032a71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13a48c21179f245edd2debdea13fe03cc870e73f0b3da0b1a94e2c1da1453e23 = $this->env->getExtension("native_profiler");
        $__internal_13a48c21179f245edd2debdea13fe03cc870e73f0b3da0b1a94e2c1da1453e23->enter($__internal_13a48c21179f245edd2debdea13fe03cc870e73f0b3da0b1a94e2c1da1453e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Base/index.html.twig"));

        // line 1
        $this->loadTemplate("HamsterHubBundle:Base:head.html.twig", "@HamsterHub/Base/index.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("HamsterHubBundle:Base:menu.html.twig", "@HamsterHub/Base/index.html.twig", 2)->display($context);
        // line 3
        echo "
<body>
  <div class=\"container\">
    ";
        // line 6
        $this->displayBlock('container', $context, $blocks);
        // line 9
        echo "  </div>
</body>
";
        // line 11
        $this->loadTemplate("HamsterHubBundle:Base:footer.html.twig", "@HamsterHub/Base/index.html.twig", 11)->display($context);
        
        $__internal_13a48c21179f245edd2debdea13fe03cc870e73f0b3da0b1a94e2c1da1453e23->leave($__internal_13a48c21179f245edd2debdea13fe03cc870e73f0b3da0b1a94e2c1da1453e23_prof);

    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        $__internal_f878258b45a67789cd7917656097b7633e210690792c7a9a2ab79efbe72e4bfe = $this->env->getExtension("native_profiler");
        $__internal_f878258b45a67789cd7917656097b7633e210690792c7a9a2ab79efbe72e4bfe->enter($__internal_f878258b45a67789cd7917656097b7633e210690792c7a9a2ab79efbe72e4bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 7
        echo "      <span>Texte par défaut</span>
    ";
        
        $__internal_f878258b45a67789cd7917656097b7633e210690792c7a9a2ab79efbe72e4bfe->leave($__internal_f878258b45a67789cd7917656097b7633e210690792c7a9a2ab79efbe72e4bfe_prof);

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
        return array (  51 => 7,  45 => 6,  38 => 11,  34 => 9,  32 => 6,  27 => 3,  25 => 2,  23 => 1,);
    }
}
/* {% include 'HamsterHubBundle:Base:head.html.twig' %}*/
/* {% include 'HamsterHubBundle:Base:menu.html.twig' %}*/
/* */
/* <body>*/
/*   <div class="container">*/
/*     {% block container %}*/
/*       <span>Texte par défaut</span>*/
/*     {% endblock %}*/
/*   </div>*/
/* </body>*/
/* {% include 'HamsterHubBundle:Base:footer.html.twig' %}*/
/* */
