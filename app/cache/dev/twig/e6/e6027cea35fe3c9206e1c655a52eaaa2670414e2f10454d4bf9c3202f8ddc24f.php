<?php

/* HamsterHubBundle:Base:index.html.twig */
class __TwigTemplate_586452ee41da97cd68212edb92aab537a0127a96255fd825650d29cafee935b0 extends Twig_Template
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
        $__internal_04807f03df300679f187ec90aa9337917a599bedc981cad4c15694df0ee5285b = $this->env->getExtension("native_profiler");
        $__internal_04807f03df300679f187ec90aa9337917a599bedc981cad4c15694df0ee5285b->enter($__internal_04807f03df300679f187ec90aa9337917a599bedc981cad4c15694df0ee5285b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:index.html.twig"));

        // line 1
        $this->loadTemplate("HamsterHubBundle:Base:head.html.twig", "HamsterHubBundle:Base:index.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("HamsterHubBundle:Base:menu.html.twig", "HamsterHubBundle:Base:index.html.twig", 2)->display($context);
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
        $this->loadTemplate("HamsterHubBundle:Base:footer.html.twig", "HamsterHubBundle:Base:index.html.twig", 11)->display($context);
        
        $__internal_04807f03df300679f187ec90aa9337917a599bedc981cad4c15694df0ee5285b->leave($__internal_04807f03df300679f187ec90aa9337917a599bedc981cad4c15694df0ee5285b_prof);

    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        $__internal_3e3193ec8ea9cd65d8d24b8de2810ca6cdceaf73a925e69cb02146e633dbf1be = $this->env->getExtension("native_profiler");
        $__internal_3e3193ec8ea9cd65d8d24b8de2810ca6cdceaf73a925e69cb02146e633dbf1be->enter($__internal_3e3193ec8ea9cd65d8d24b8de2810ca6cdceaf73a925e69cb02146e633dbf1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 7
        echo "      <span>Texte par défaut</span>
    ";
        
        $__internal_3e3193ec8ea9cd65d8d24b8de2810ca6cdceaf73a925e69cb02146e633dbf1be->leave($__internal_3e3193ec8ea9cd65d8d24b8de2810ca6cdceaf73a925e69cb02146e633dbf1be_prof);

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
