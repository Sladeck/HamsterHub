<?php

/* @HamsterHub/Base/menu.html.twig */
class __TwigTemplate_5822eb7e7eb9815d63f1bf37aafb9186728e8f876c603fb36391aa84ba19cd62 extends Twig_Template
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
        $__internal_7c4db081cdb9c350bfad7facf4d1e6ef3d917ee54f2e480e71c3905fa686337e = $this->env->getExtension("native_profiler");
        $__internal_7c4db081cdb9c350bfad7facf4d1e6ef3d917ee54f2e480e71c3905fa686337e->enter($__internal_7c4db081cdb9c350bfad7facf4d1e6ef3d917ee54f2e480e71c3905fa686337e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Base/menu.html.twig"));

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
        
        $__internal_7c4db081cdb9c350bfad7facf4d1e6ef3d917ee54f2e480e71c3905fa686337e->leave($__internal_7c4db081cdb9c350bfad7facf4d1e6ef3d917ee54f2e480e71c3905fa686337e_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Base/menu.html.twig";
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
