<?php

/* HamsterHubBundle:Base:menu.html.twig */
class __TwigTemplate_6a1a1d63b802ca2bb50f6497a90be5b312d32070359b2de285c5a2b1b674c1d2 extends Twig_Template
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
        $__internal_3558e8bb7a9b5cf31c3272647571c95865e233c97ef6c13bdc6210843712bb63 = $this->env->getExtension("native_profiler");
        $__internal_3558e8bb7a9b5cf31c3272647571c95865e233c97ef6c13bdc6210843712bb63->enter($__internal_3558e8bb7a9b5cf31c3272647571c95865e233c97ef6c13bdc6210843712bb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:menu.html.twig"));

        // line 1
        echo "<nav id='cssmenu'>
    <ul>
       <li class='active'><a href='#'><span>Accueil</span></a></li>
       ";
        // line 4
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 5
            echo "          <li><a href='/profile'><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span></a></li>
          <li class='last'><a href='/logout'><span>Déconnexion</span></a></li>
       ";
        } else {
            // line 8
            echo "          <li><a href='/login'><span>Connexion</span></a></li>
          <li class='last'><a href='/register'><span>Inscription</span></a></li>
       ";
        }
        // line 11
        echo "    </ul>
</nav>
";
        
        $__internal_3558e8bb7a9b5cf31c3272647571c95865e233c97ef6c13bdc6210843712bb63->leave($__internal_3558e8bb7a9b5cf31c3272647571c95865e233c97ef6c13bdc6210843712bb63_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Base:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  36 => 8,  29 => 5,  27 => 4,  22 => 1,);
    }
}
/* <nav id='cssmenu'>*/
/*     <ul>*/
/*        <li class='active'><a href='#'><span>Accueil</span></a></li>*/
/*        {% if ((is_granted("IS_AUTHENTICATED_REMEMBERED")) or (is_granted("IS_AUTHENTICATED_FULLY"))) %}*/
/*           <li><a href='/profile'><span>{{app.user.username}}</span></a></li>*/
/*           <li class='last'><a href='/logout'><span>Déconnexion</span></a></li>*/
/*        {% else %}*/
/*           <li><a href='/login'><span>Connexion</span></a></li>*/
/*           <li class='last'><a href='/register'><span>Inscription</span></a></li>*/
/*        {% endif %}*/
/*     </ul>*/
/* </nav>*/
/* */
