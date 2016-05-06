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
        $__internal_52fd91423cb8bf6d7f0645f9c25b59c183c861e4112fbd871b0456a8b9e723d3 = $this->env->getExtension("native_profiler");
        $__internal_52fd91423cb8bf6d7f0645f9c25b59c183c861e4112fbd871b0456a8b9e723d3->enter($__internal_52fd91423cb8bf6d7f0645f9c25b59c183c861e4112fbd871b0456a8b9e723d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Base/index.html.twig"));

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
        
        $__internal_52fd91423cb8bf6d7f0645f9c25b59c183c861e4112fbd871b0456a8b9e723d3->leave($__internal_52fd91423cb8bf6d7f0645f9c25b59c183c861e4112fbd871b0456a8b9e723d3_prof);

    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        $__internal_7206a007304a8f36e51409328cfcb06eaecb67185ad8786b7f1d5d5d402241a5 = $this->env->getExtension("native_profiler");
        $__internal_7206a007304a8f36e51409328cfcb06eaecb67185ad8786b7f1d5d5d402241a5->enter($__internal_7206a007304a8f36e51409328cfcb06eaecb67185ad8786b7f1d5d5d402241a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 7
        echo "      <span>Texte par défaut</span>
    ";
        
        $__internal_7206a007304a8f36e51409328cfcb06eaecb67185ad8786b7f1d5d5d402241a5->leave($__internal_7206a007304a8f36e51409328cfcb06eaecb67185ad8786b7f1d5d5d402241a5_prof);

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
