<?php

/* HamsterHubBundle:Base:index.html.twig */
class __TwigTemplate_586452ee41da97cd68212edb92aab537a0127a96255fd825650d29cafee935b0 extends Twig_Template
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
        $__internal_942323eef640e2a96f3aa42eca5d486bfd6c9700850edd0cd841d26b52c14a2d = $this->env->getExtension("native_profiler");
        $__internal_942323eef640e2a96f3aa42eca5d486bfd6c9700850edd0cd841d26b52c14a2d->enter($__internal_942323eef640e2a96f3aa42eca5d486bfd6c9700850edd0cd841d26b52c14a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:index.html.twig"));

        // line 1
        $this->loadTemplate("HamsterHubBundle:Base:head.html.twig", "HamsterHubBundle:Base:index.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("HamsterHubBundle:Base:menu.html.twig", "HamsterHubBundle:Base:index.html.twig", 2)->display($context);
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
        $this->loadTemplate("HamsterHubBundle:Base:footer.html.twig", "HamsterHubBundle:Base:index.html.twig", 12)->display($context);
        
        $__internal_942323eef640e2a96f3aa42eca5d486bfd6c9700850edd0cd841d26b52c14a2d->leave($__internal_942323eef640e2a96f3aa42eca5d486bfd6c9700850edd0cd841d26b52c14a2d_prof);

    }

    // line 5
    public function block_h1($context, array $blocks = array())
    {
        $__internal_c006a43891075a2f2d1f3d557796d35aca916100824f802828361672a93b49aa = $this->env->getExtension("native_profiler");
        $__internal_c006a43891075a2f2d1f3d557796d35aca916100824f802828361672a93b49aa->enter($__internal_c006a43891075a2f2d1f3d557796d35aca916100824f802828361672a93b49aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h1"));

        echo "Accueil";
        
        $__internal_c006a43891075a2f2d1f3d557796d35aca916100824f802828361672a93b49aa->leave($__internal_c006a43891075a2f2d1f3d557796d35aca916100824f802828361672a93b49aa_prof);

    }

    // line 7
    public function block_container($context, array $blocks = array())
    {
        $__internal_6f09d25555512e62147a84d89a2cc30a8fcf3c13d71019ba3e38c51947145b30 = $this->env->getExtension("native_profiler");
        $__internal_6f09d25555512e62147a84d89a2cc30a8fcf3c13d71019ba3e38c51947145b30->enter($__internal_6f09d25555512e62147a84d89a2cc30a8fcf3c13d71019ba3e38c51947145b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 8
        echo "      <span>Texte par défaut</span>
    ";
        
        $__internal_6f09d25555512e62147a84d89a2cc30a8fcf3c13d71019ba3e38c51947145b30->leave($__internal_6f09d25555512e62147a84d89a2cc30a8fcf3c13d71019ba3e38c51947145b30_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Base:index.html.twig";
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
