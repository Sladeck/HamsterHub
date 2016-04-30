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
        $__internal_3816e52b8a3b3575900b151724b39fdaec691e6c580f8f76162cebf96ae04b86 = $this->env->getExtension("native_profiler");
        $__internal_3816e52b8a3b3575900b151724b39fdaec691e6c580f8f76162cebf96ae04b86->enter($__internal_3816e52b8a3b3575900b151724b39fdaec691e6c580f8f76162cebf96ae04b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:index.html.twig"));

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
        
        $__internal_3816e52b8a3b3575900b151724b39fdaec691e6c580f8f76162cebf96ae04b86->leave($__internal_3816e52b8a3b3575900b151724b39fdaec691e6c580f8f76162cebf96ae04b86_prof);

    }

    // line 5
    public function block_h1($context, array $blocks = array())
    {
        $__internal_8117479db969a6afdf33a2b069784a2db53a96b4ebeacf19410a20a7439f406b = $this->env->getExtension("native_profiler");
        $__internal_8117479db969a6afdf33a2b069784a2db53a96b4ebeacf19410a20a7439f406b->enter($__internal_8117479db969a6afdf33a2b069784a2db53a96b4ebeacf19410a20a7439f406b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h1"));

        echo "Accueil";
        
        $__internal_8117479db969a6afdf33a2b069784a2db53a96b4ebeacf19410a20a7439f406b->leave($__internal_8117479db969a6afdf33a2b069784a2db53a96b4ebeacf19410a20a7439f406b_prof);

    }

    // line 7
    public function block_container($context, array $blocks = array())
    {
        $__internal_6be589fab111b64826c02968a3eecc582c39f9d52b0afb338d6cc84feb4da572 = $this->env->getExtension("native_profiler");
        $__internal_6be589fab111b64826c02968a3eecc582c39f9d52b0afb338d6cc84feb4da572->enter($__internal_6be589fab111b64826c02968a3eecc582c39f9d52b0afb338d6cc84feb4da572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 8
        echo "      <span>Texte par défaut</span>
    ";
        
        $__internal_6be589fab111b64826c02968a3eecc582c39f9d52b0afb338d6cc84feb4da572->leave($__internal_6be589fab111b64826c02968a3eecc582c39f9d52b0afb338d6cc84feb4da572_prof);

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
